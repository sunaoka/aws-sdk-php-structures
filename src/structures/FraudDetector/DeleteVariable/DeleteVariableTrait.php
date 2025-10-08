<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteVariable;

trait DeleteVariableTrait
{
    /**
     * @param DeleteVariableRequest $args
     * @return DeleteVariableResponse
     */
    public function deleteVariable(DeleteVariableRequest $args)
    {
        $result = parent::deleteVariable($args->toArray());
        return new DeleteVariableResponse($result->toArray());
    }
}
