<?php

namespace Sunaoka\Aws\Structures\Connect\TagContact;

trait TagContactTrait
{
    /**
     * @param TagContactRequest $args
     * @return TagContactResponse
     */
    public function tagContact(TagContactRequest $args)
    {
        $result = parent::tagContact($args->toArray());
        return new TagContactResponse($result->toArray());
    }
}
