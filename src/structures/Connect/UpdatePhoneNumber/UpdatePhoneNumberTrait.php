<?php

namespace Sunaoka\Aws\Structures\Connect\UpdatePhoneNumber;

trait UpdatePhoneNumberTrait
{
    /**
     * @param UpdatePhoneNumberRequest $args
     * @return UpdatePhoneNumberResponse
     */
    public function updatePhoneNumber(UpdatePhoneNumberRequest $args)
    {
        $result = parent::updatePhoneNumber($args->toArray());
        return new UpdatePhoneNumberResponse($result->toArray());
    }
}
