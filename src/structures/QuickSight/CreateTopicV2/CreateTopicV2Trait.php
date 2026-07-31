<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopicV2;

trait CreateTopicV2Trait
{
    /**
     * @param CreateTopicV2Request $args
     * @return CreateTopicV2Response
     */
    public function createTopicV2(CreateTopicV2Request $args)
    {
        $result = parent::createTopicV2($args->toArray());
        return new CreateTopicV2Response($result->toArray());
    }
}
