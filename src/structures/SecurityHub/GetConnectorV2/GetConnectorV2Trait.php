<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConnectorV2;

trait GetConnectorV2Trait
{
    /**
     * @param GetConnectorV2Request $args
     * @return GetConnectorV2Response
     */
    public function getConnectorV2(GetConnectorV2Request $args)
    {
        $result = parent::getConnectorV2($args->toArray());
        return new GetConnectorV2Response($result->toArray());
    }
}
