<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2;

trait CreateClusterV2Trait
{
    /**
     * @param CreateClusterV2Request $args
     * @return CreateClusterV2Response
     */
    public function createClusterV2(CreateClusterV2Request $args)
    {
        $result = parent::createClusterV2($args->toArray());
        return new CreateClusterV2Response($result->toArray());
    }
}
