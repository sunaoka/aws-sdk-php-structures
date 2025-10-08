<?php

namespace Sunaoka\Aws\Structures\Support\AddCommunicationToCase;

trait AddCommunicationToCaseTrait
{
    /**
     * @param AddCommunicationToCaseRequest $args
     * @return AddCommunicationToCaseResponse
     */
    public function addCommunicationToCase(AddCommunicationToCaseRequest $args)
    {
        $result = parent::addCommunicationToCase($args->toArray());
        return new AddCommunicationToCaseResponse($result->toArray());
    }
}
