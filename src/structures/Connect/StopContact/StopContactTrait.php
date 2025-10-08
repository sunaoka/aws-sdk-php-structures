<?php

namespace Sunaoka\Aws\Structures\Connect\StopContact;

trait StopContactTrait
{
    /**
     * @param StopContactRequest $args
     * @return StopContactResponse
     */
    public function stopContact(StopContactRequest $args)
    {
        $result = parent::stopContact($args->toArray());
        return new StopContactResponse($result->toArray());
    }
}
