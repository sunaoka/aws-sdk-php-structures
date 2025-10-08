<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateConfigurationSetSendingEnabled;

trait UpdateConfigurationSetSendingEnabledTrait
{
    /**
     * @param UpdateConfigurationSetSendingEnabledRequest $args
     * @return void
     */
    public function updateConfigurationSetSendingEnabled(UpdateConfigurationSetSendingEnabledRequest $args)
    {
        parent::updateConfigurationSetSendingEnabled($args->toArray());
    }
}
