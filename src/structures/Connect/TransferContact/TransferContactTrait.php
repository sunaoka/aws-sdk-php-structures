<?php

namespace Sunaoka\Aws\Structures\Connect\TransferContact;

trait TransferContactTrait
{
    /**
     * @param TransferContactRequest $args
     * @return TransferContactResponse
     */
    public function transferContact(TransferContactRequest $args)
    {
        $result = parent::transferContact($args->toArray());
        return new TransferContactResponse($result->toArray());
    }
}
