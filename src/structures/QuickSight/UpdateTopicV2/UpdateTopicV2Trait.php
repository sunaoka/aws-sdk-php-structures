<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopicV2;

trait UpdateTopicV2Trait
{
    /**
     * @param UpdateTopicV2Request $args
     * @return UpdateTopicV2Response
     */
    public function updateTopicV2(UpdateTopicV2Request $args)
    {
        $result = parent::updateTopicV2($args->toArray());
        return new UpdateTopicV2Response($result->toArray());
    }
}
