<?php

namespace Sunaoka\Aws\Structures\Account\DeleteAlternateContact;

trait DeleteAlternateContactTrait
{
    /**
     * @param DeleteAlternateContactRequest $args
     * @return void
     */
    public function deleteAlternateContact(DeleteAlternateContactRequest $args)
    {
        parent::deleteAlternateContact($args->toArray());
    }
}
