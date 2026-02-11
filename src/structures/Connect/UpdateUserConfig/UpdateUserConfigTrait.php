<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserConfig;

trait UpdateUserConfigTrait
{
    /**
     * @param UpdateUserConfigRequest $args
     * @return void
     */
    public function updateUserConfig(UpdateUserConfigRequest $args)
    {
        parent::updateUserConfig($args->toArray());
    }
}
