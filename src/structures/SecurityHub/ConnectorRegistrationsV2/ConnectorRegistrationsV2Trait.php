<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ConnectorRegistrationsV2;

trait ConnectorRegistrationsV2Trait
{
    /**
     * @param ConnectorRegistrationsV2Request $args
     * @return ConnectorRegistrationsV2Response
     */
    public function connectorRegistrationsV2(ConnectorRegistrationsV2Request $args)
    {
        $result = parent::connectorRegistrationsV2($args->toArray());
        return new ConnectorRegistrationsV2Response($result->toArray());
    }
}
