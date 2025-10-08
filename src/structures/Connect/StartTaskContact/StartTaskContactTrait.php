<?php

namespace Sunaoka\Aws\Structures\Connect\StartTaskContact;

trait StartTaskContactTrait
{
    /**
     * @param StartTaskContactRequest $args
     * @return StartTaskContactResponse
     */
    public function startTaskContact(StartTaskContactRequest $args)
    {
        $result = parent::startTaskContact($args->toArray());
        return new StartTaskContactResponse($result->toArray());
    }
}
