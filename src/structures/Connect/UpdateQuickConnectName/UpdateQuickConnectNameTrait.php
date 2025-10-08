<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQuickConnectName;

trait UpdateQuickConnectNameTrait
{
    /**
     * @param UpdateQuickConnectNameRequest $args
     * @return void
     */
    public function updateQuickConnectName(UpdateQuickConnectNameRequest $args)
    {
        parent::updateQuickConnectName($args->toArray());
    }
}
