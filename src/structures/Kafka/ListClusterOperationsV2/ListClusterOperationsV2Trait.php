<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusterOperationsV2;

trait ListClusterOperationsV2Trait
{
    /**
     * @param ListClusterOperationsV2Request $args
     * @return ListClusterOperationsV2Response
     */
    public function listClusterOperationsV2(ListClusterOperationsV2Request $args)
    {
        $result = parent::listClusterOperationsV2($args->toArray());
        return new ListClusterOperationsV2Response($result->toArray());
    }
}
