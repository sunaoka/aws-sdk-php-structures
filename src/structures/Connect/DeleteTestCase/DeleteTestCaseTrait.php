<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteTestCase;

trait DeleteTestCaseTrait
{
    /**
     * @param DeleteTestCaseRequest $args
     * @return DeleteTestCaseResponse
     */
    public function deleteTestCase(DeleteTestCaseRequest $args)
    {
        $result = parent::deleteTestCase($args->toArray());
        return new DeleteTestCaseResponse($result->toArray());
    }
}
