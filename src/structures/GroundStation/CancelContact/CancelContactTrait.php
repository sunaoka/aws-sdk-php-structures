<?php

namespace Sunaoka\Aws\Structures\GroundStation\CancelContact;

trait CancelContactTrait
{
    /**
     * @param CancelContactRequest $args
     * @return CancelContactResponse
     */
    public function cancelContact(CancelContactRequest $args)
    {
        $result = parent::cancelContact($args->toArray());
        return new CancelContactResponse($result->toArray());
    }
}
