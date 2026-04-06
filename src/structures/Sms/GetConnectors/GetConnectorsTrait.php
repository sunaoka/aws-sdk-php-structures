<?php

namespace Sunaoka\Aws\Structures\Sms\GetConnectors;

trait GetConnectorsTrait
{
    /**
     * @param GetConnectorsRequest $args
     * @return GetConnectorsResponse
     */
    public function getConnectors(GetConnectorsRequest $args)
    {
        $result = parent::getConnectors($args->toArray());
        return new GetConnectorsResponse($result->toArray());
    }
}
