<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserIdentityInfo;

trait UpdateUserIdentityInfoTrait
{
    /**
     * @param UpdateUserIdentityInfoRequest $args
     * @return void
     */
    public function updateUserIdentityInfo(UpdateUserIdentityInfoRequest $args)
    {
        parent::updateUserIdentityInfo($args->toArray());
    }
}
