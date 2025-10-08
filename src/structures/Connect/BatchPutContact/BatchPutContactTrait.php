<?php

namespace Sunaoka\Aws\Structures\Connect\BatchPutContact;

trait BatchPutContactTrait
{
    /**
     * @param BatchPutContactRequest $args
     * @return BatchPutContactResponse
     */
    public function batchPutContact(BatchPutContactRequest $args)
    {
        $result = parent::batchPutContact($args->toArray());
        return new BatchPutContactResponse($result->toArray());
    }
}
