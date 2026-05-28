<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\DeleteAssertion;

trait DeleteAssertionTrait
{
    /**
     * @param DeleteAssertionRequest $args
     * @return DeleteAssertionResponse
     */
    public function deleteAssertion(DeleteAssertionRequest $args)
    {
        $result = parent::deleteAssertion($args->toArray());
        return new DeleteAssertionResponse($result->toArray());
    }
}
