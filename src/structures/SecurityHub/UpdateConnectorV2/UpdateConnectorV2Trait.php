<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConnectorV2;

trait UpdateConnectorV2Trait
{
    /**
     * @param UpdateConnectorV2Request $args
     * @return UpdateConnectorV2Response
     */
    public function updateConnectorV2(UpdateConnectorV2Request $args)
    {
        $result = parent::updateConnectorV2($args->toArray());
        return new UpdateConnectorV2Response($result->toArray());
    }
}
