<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConnectorsV2;

trait ListConnectorsV2Trait
{
    /**
     * @param ListConnectorsV2Request $args
     * @return ListConnectorsV2Response
     */
    public function listConnectorsV2(ListConnectorsV2Request $args)
    {
        $result = parent::listConnectorsV2($args->toArray());
        return new ListConnectorsV2Response($result->toArray());
    }
}
