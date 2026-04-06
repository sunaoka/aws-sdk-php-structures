<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeleteConnectorV2;

trait DeleteConnectorV2Trait
{
    /**
     * @param DeleteConnectorV2Request $args
     * @return DeleteConnectorV2Response
     */
    public function deleteConnectorV2(DeleteConnectorV2Request $args)
    {
        $result = parent::deleteConnectorV2($args->toArray());
        return new DeleteConnectorV2Response($result->toArray());
    }
}
