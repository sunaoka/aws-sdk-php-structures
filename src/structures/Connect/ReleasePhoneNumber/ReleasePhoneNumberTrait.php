<?php

namespace Sunaoka\Aws\Structures\Connect\ReleasePhoneNumber;

trait ReleasePhoneNumberTrait
{
    /**
     * @param ReleasePhoneNumberRequest $args
     * @return void
     */
    public function releasePhoneNumber(ReleasePhoneNumberRequest $args)
    {
        parent::releasePhoneNumber($args->toArray());
    }
}
