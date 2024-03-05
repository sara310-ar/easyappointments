<?php defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * Easy!Appointments - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2020, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Citys_Model Class
 *
 * Contains the database operations for the service provider users of Easy!Appointments.
 *
 * @package Models
 */
class Cities_model extends EA_Model {
    /**
     * Citys_Model constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('data_validation');
        $this->load->helper('general');
    }
    /**
     * Get the available system cities.
     *
     * This method returns the available cities and the services that can provide.
     *
     * @return array Returns an array with the cities data.
     */
    public function get_available_cities()
    {
        // Get provider records from database.
        $this->db
            ->select('cities.*')
            ->from('cities');

        $cities = $this->db->get()->result_array();

        return $cities;
    }

    public function get_locations()
    {
        $query = $this->db->get('locations');
        return $query->result_array();
    }

    /**
     * Get a specific row from the cities table.
     *
     * @param int $city_id The record's id to be returned.
     *
     * @return array Returns an associative array with the selected record's data. Each key has the same name as the
     * database field names.
     *
     * @throws Exception If $customer_id argumnet is invalid.
     */
    public function get_row($city_id)
    {
        if ( ! is_numeric($city_id))
        {
            throw new Exception('Invalid argument provided as $city_id : ' . $city_id);
        }
        return $this->db->get_where('cities', ['id' => $city_id])->row_array();
    }

    /**
     * Get a specific row from the cities table.
     *
     * @param int $city_id The record's id to be returned.
     *
     * @return array Returns an associative array with the selected record's data. Each key has the same name as the
     * database field names.
     *
     * @throws Exception If $customer_id argumnet is invalid.
     */
    public function get_location_row($location_id)
    {
        if ( ! is_numeric($location_id))
        {
            throw new Exception('Invalid argument provided as $location_id : ' . $location_id);
        }
        return $this->db->get_where('locations', ['id' => $location_id])->row_array();
    }

    public function get_locations_by_city($city_id)
    {
        $query = $this->db->get_where('locations', ['city_id' => $city_id]);
        return $query->result_array();
    }

}
