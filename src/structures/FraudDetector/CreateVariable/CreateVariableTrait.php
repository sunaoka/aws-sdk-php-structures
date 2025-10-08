<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateVariable;

trait CreateVariableTrait
{
    /**
     * @param CreateVariableRequest $args
     * @return CreateVariableResponse
     */
    public function createVariable(CreateVariableRequest $args)
    {
        $result = parent::createVariable($args->toArray());
        return new CreateVariableResponse($result->toArray());
    }
}
