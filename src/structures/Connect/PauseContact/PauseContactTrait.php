<?php

namespace Sunaoka\Aws\Structures\Connect\PauseContact;

trait PauseContactTrait
{
    /**
     * @param PauseContactRequest $args
     * @return PauseContactResponse
     */
    public function pauseContact(PauseContactRequest $args)
    {
        $result = parent::pauseContact($args->toArray());
        return new PauseContactResponse($result->toArray());
    }
}
