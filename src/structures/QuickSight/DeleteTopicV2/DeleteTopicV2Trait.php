<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteTopicV2;

trait DeleteTopicV2Trait
{
    /**
     * @param DeleteTopicV2Request $args
     * @return DeleteTopicV2Response
     */
    public function deleteTopicV2(DeleteTopicV2Request $args)
    {
        $result = parent::deleteTopicV2($args->toArray());
        return new DeleteTopicV2Response($result->toArray());
    }
}
