<?php

namespace Sunaoka\Aws\Structures\SecurityHub\RegisterConnectorV2;

trait RegisterConnectorV2Trait
{
    /**
     * @param RegisterConnectorV2Request $args
     * @return RegisterConnectorV2Response
     */
    public function registerConnectorV2(RegisterConnectorV2Request $args)
    {
        $result = parent::registerConnectorV2($args->toArray());
        return new RegisterConnectorV2Response($result->toArray());
    }
}
