<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateTest;

trait UpdateTestTrait
{
    /**
     * @param UpdateTestRequest $args
     * @return UpdateTestResponse
     */
    public function updateTest(UpdateTestRequest $args)
    {
        $result = parent::updateTest($args->toArray());
        return new UpdateTestResponse($result->toArray());
    }
}
