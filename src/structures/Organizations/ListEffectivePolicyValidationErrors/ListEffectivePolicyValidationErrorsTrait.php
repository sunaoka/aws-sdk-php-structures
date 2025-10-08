<?php

namespace Sunaoka\Aws\Structures\Organizations\ListEffectivePolicyValidationErrors;

trait ListEffectivePolicyValidationErrorsTrait
{
    /**
     * @param ListEffectivePolicyValidationErrorsRequest $args
     * @return ListEffectivePolicyValidationErrorsResponse
     */
    public function listEffectivePolicyValidationErrors(ListEffectivePolicyValidationErrorsRequest $args)
    {
        $result = parent::listEffectivePolicyValidationErrors($args->toArray());
        return new ListEffectivePolicyValidationErrorsResponse($result->toArray());
    }
}
