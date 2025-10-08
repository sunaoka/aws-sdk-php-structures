<?php

namespace Sunaoka\Aws\Structures\Connect\StartEmailContact;

trait StartEmailContactTrait
{
    /**
     * @param StartEmailContactRequest $args
     * @return StartEmailContactResponse
     */
    public function startEmailContact(StartEmailContactRequest $args)
    {
        $result = parent::startEmailContact($args->toArray());
        return new StartEmailContactResponse($result->toArray());
    }
}
