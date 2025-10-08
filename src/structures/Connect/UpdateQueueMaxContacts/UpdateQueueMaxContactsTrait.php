<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQueueMaxContacts;

trait UpdateQueueMaxContactsTrait
{
    /**
     * @param UpdateQueueMaxContactsRequest $args
     * @return void
     */
    public function updateQueueMaxContacts(UpdateQueueMaxContactsRequest $args)
    {
        parent::updateQueueMaxContacts($args->toArray());
    }
}
