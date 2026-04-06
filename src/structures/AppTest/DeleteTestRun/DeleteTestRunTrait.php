<?php

namespace Sunaoka\Aws\Structures\AppTest\DeleteTestRun;

trait DeleteTestRunTrait
{
    /**
     * @param DeleteTestRunRequest $args
     * @return DeleteTestRunResponse
     */
    public function deleteTestRun(DeleteTestRunRequest $args)
    {
        $result = parent::deleteTestRun($args->toArray());
        return new DeleteTestRunResponse($result->toArray());
    }
}
