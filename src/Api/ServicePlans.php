<?php

namespace nickurt\PleskXml\Api;

class ServicePlans extends AbstractApi
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->post([
            'service-plan' => ['get' => ['filter' => [], 'owner-all' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->post([
            'service-plan' => ['add' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->post([
            'service-plan' => ['del' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->post([
            'service-plan' => ['get' => ['filter' => $params, 'owner-all' => []]]
        ]);
    }
}
