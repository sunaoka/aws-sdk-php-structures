<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClustersV2;

trait ListClustersV2Trait
{
    /**
     * @param ListClustersV2Request $args
     * @return ListClustersV2Response
     */
    public function listClustersV2(ListClustersV2Request $args)
    {
        $result = parent::listClustersV2($args->toArray());
        return new ListClustersV2Response($result->toArray());
    }
}
