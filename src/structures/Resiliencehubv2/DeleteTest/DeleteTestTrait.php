<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\DeleteTest;

trait DeleteTestTrait
{
    /**
     * @param DeleteTestRequest $args
     * @return DeleteTestResponse
     */
    public function deleteTest(DeleteTestRequest $args)
    {
        $result = parent::deleteTest($args->toArray());
        return new DeleteTestResponse($result->toArray());
    }
}
