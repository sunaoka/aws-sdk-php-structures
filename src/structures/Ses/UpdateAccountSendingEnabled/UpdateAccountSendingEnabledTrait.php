<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateAccountSendingEnabled;

trait UpdateAccountSendingEnabledTrait
{
    /**
     * @param UpdateAccountSendingEnabledRequest $args
     * @return void
     */
    public function updateAccountSendingEnabled(UpdateAccountSendingEnabledRequest $args)
    {
        parent::updateAccountSendingEnabled($args->toArray());
    }
}
