<?php

namespace Sunaoka\Aws\Structures\SagemakerJobRuntime\CompleteRollout;

trait CompleteRolloutTrait
{
    /**
     * @param CompleteRolloutRequest $args
     * @return CompleteRolloutResponse
     */
    public function completeRollout(CompleteRolloutRequest $args)
    {
        $result = parent::completeRollout($args->toArray());
        return new CompleteRolloutResponse($result->toArray());
    }
}
