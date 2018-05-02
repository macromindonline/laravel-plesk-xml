<?php

namespace nickurt\PleskXml\Api;

class Plesk extends Operator
{
    /**
     * @return mixed
     */
    public function additional_key()
    {
        return $this->client->request([
            'server' => ['get_additional_key' => []]
        ]);
    }

    /**
     * @return mixed
     */
    public function information()
    {
        return $this->client->request([
            'server' => ['get' => ['admin' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function install_key($params)
    {
        return $this->client->request([
            'server' => ['lic_install' => $params]
        ]);
    }

    /**
     * @return mixed
     */
    public function key()
    {
        return $this->client->request([
            'server' => ['get' => ['key' => []]]
        ]);
    }

    /**
     * @return mixed
     */
    public function rollback_key()
    {
        return $this->client->request([
            'server' => ['license-rollback-key' => []]
        ]);
    }

    /**
     * @return mixed
     */
    public function services()
    {
        return $this->client->request([
            'server' => ['get' => ['services_state' => []]]
        ]);
    }
}
