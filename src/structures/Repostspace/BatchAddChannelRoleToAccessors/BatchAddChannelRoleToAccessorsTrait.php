<?php

namespace Sunaoka\Aws\Structures\Repostspace\BatchAddChannelRoleToAccessors;

trait BatchAddChannelRoleToAccessorsTrait
{
    /**
     * @param BatchAddChannelRoleToAccessorsRequest $args
     * @return BatchAddChannelRoleToAccessorsResponse
     */
    public function batchAddChannelRoleToAccessors(BatchAddChannelRoleToAccessorsRequest $args)
    {
        $result = parent::batchAddChannelRoleToAccessors($args->toArray());
        return new BatchAddChannelRoleToAccessorsResponse($result->toArray());
    }
}
