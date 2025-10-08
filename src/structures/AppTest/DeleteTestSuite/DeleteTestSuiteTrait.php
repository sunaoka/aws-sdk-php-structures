<?php

namespace Sunaoka\Aws\Structures\AppTest\DeleteTestSuite;

trait DeleteTestSuiteTrait
{
    /**
     * @param DeleteTestSuiteRequest $args
     * @return DeleteTestSuiteResponse
     */
    public function deleteTestSuite(DeleteTestSuiteRequest $args)
    {
        $result = parent::deleteTestSuite($args->toArray());
        return new DeleteTestSuiteResponse($result->toArray());
    }
}
