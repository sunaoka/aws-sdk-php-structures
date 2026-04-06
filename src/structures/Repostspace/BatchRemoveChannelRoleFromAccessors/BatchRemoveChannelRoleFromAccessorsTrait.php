<?php

namespace Sunaoka\Aws\Structures\Repostspace\BatchRemoveChannelRoleFromAccessors;

trait BatchRemoveChannelRoleFromAccessorsTrait
{
    /**
     * @param BatchRemoveChannelRoleFromAccessorsRequest $args
     * @return BatchRemoveChannelRoleFromAccessorsResponse
     */
    public function batchRemoveChannelRoleFromAccessors(BatchRemoveChannelRoleFromAccessorsRequest $args)
    {
        $result = parent::batchRemoveChannelRoleFromAccessors($args->toArray());
        return new BatchRemoveChannelRoleFromAccessorsResponse($result->toArray());
    }
}
