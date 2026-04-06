<?php

namespace Sunaoka\Aws\Structures\Connect\UntagContact;

trait UntagContactTrait
{
    /**
     * @param UntagContactRequest $args
     * @return UntagContactResponse
     */
    public function untagContact(UntagContactRequest $args)
    {
        $result = parent::untagContact($args->toArray());
        return new UntagContactResponse($result->toArray());
    }
}
