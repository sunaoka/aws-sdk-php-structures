<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType;

trait RegisterConnectionTypeTrait
{
    /**
     * @param RegisterConnectionTypeRequest $args
     * @return RegisterConnectionTypeResponse
     */
    public function registerConnectionType(RegisterConnectionTypeRequest $args)
    {
        $result = parent::registerConnectionType($args->toArray());
        return new RegisterConnectionTypeResponse($result->toArray());
    }
}
