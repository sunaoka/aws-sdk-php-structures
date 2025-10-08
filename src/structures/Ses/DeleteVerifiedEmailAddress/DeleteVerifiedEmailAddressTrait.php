<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteVerifiedEmailAddress;

trait DeleteVerifiedEmailAddressTrait
{
    /**
     * @param DeleteVerifiedEmailAddressRequest $args
     * @return void
     */
    public function deleteVerifiedEmailAddress(DeleteVerifiedEmailAddressRequest $args)
    {
        parent::deleteVerifiedEmailAddress($args->toArray());
    }
}
