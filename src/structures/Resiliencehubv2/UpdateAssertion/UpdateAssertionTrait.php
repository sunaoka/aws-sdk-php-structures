<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateAssertion;

trait UpdateAssertionTrait
{
    /**
     * @param UpdateAssertionRequest $args
     * @return UpdateAssertionResponse
     */
    public function updateAssertion(UpdateAssertionRequest $args)
    {
        $result = parent::updateAssertion($args->toArray());
        return new UpdateAssertionResponse($result->toArray());
    }
}
