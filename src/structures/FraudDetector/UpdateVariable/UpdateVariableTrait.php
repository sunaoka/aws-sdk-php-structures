<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateVariable;

trait UpdateVariableTrait
{
    /**
     * @param UpdateVariableRequest $args
     * @return UpdateVariableResponse
     */
    public function updateVariable(UpdateVariableRequest $args)
    {
        $result = parent::updateVariable($args->toArray());
        return new UpdateVariableResponse($result->toArray());
    }
}
