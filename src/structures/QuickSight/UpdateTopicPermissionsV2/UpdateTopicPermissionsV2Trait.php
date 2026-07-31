<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopicPermissionsV2;

trait UpdateTopicPermissionsV2Trait
{
    /**
     * @param UpdateTopicPermissionsV2Request $args
     * @return UpdateTopicPermissionsV2Response
     */
    public function updateTopicPermissionsV2(UpdateTopicPermissionsV2Request $args)
    {
        $result = parent::updateTopicPermissionsV2($args->toArray());
        return new UpdateTopicPermissionsV2Response($result->toArray());
    }
}
