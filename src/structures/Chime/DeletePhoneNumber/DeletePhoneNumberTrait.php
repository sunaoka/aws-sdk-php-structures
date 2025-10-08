<?php

namespace Sunaoka\Aws\Structures\Chime\DeletePhoneNumber;

trait DeletePhoneNumberTrait
{
    /**
     * @param DeletePhoneNumberRequest $args
     * @return void
     */
    public function deletePhoneNumber(DeletePhoneNumberRequest $args)
    {
        parent::deletePhoneNumber($args->toArray());
    }
}
