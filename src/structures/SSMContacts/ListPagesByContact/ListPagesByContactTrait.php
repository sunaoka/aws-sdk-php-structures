<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPagesByContact;

trait ListPagesByContactTrait
{
    /**
     * @param ListPagesByContactRequest $args
     * @return ListPagesByContactResponse
     */
    public function listPagesByContact(ListPagesByContactRequest $args)
    {
        $result = parent::listPagesByContact($args->toArray());
        return new ListPagesByContactResponse($result->toArray());
    }
}
