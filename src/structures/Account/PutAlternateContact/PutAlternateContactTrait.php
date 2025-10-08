<?php

namespace Sunaoka\Aws\Structures\Account\PutAlternateContact;

trait PutAlternateContactTrait
{
    /**
     * @param PutAlternateContactRequest $args
     * @return void
     */
    public function putAlternateContact(PutAlternateContactRequest $args)
    {
        parent::putAlternateContact($args->toArray());
    }
}
