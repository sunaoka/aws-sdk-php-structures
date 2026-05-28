<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateAssertion;

trait CreateAssertionTrait
{
    /**
     * @param CreateAssertionRequest $args
     * @return CreateAssertionResponse
     */
    public function createAssertion(CreateAssertionRequest $args)
    {
        $result = parent::createAssertion($args->toArray());
        return new CreateAssertionResponse($result->toArray());
    }
}
