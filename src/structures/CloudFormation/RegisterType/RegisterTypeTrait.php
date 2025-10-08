<?php

namespace Sunaoka\Aws\Structures\CloudFormation\RegisterType;

trait RegisterTypeTrait
{
    /**
     * @param RegisterTypeRequest $args
     * @return RegisterTypeResponse
     */
    public function registerType(RegisterTypeRequest $args)
    {
        $result = parent::registerType($args->toArray());
        return new RegisterTypeResponse($result->toArray());
    }
}
