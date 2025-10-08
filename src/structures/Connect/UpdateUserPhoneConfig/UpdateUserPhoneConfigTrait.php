<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserPhoneConfig;

trait UpdateUserPhoneConfigTrait
{
    /**
     * @param UpdateUserPhoneConfigRequest $args
     * @return void
     */
    public function updateUserPhoneConfig(UpdateUserPhoneConfigRequest $args)
    {
        parent::updateUserPhoneConfig($args->toArray());
    }
}
