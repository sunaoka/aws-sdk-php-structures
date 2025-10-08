<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ActivateType;

trait ActivateTypeTrait
{
    /**
     * @param ActivateTypeRequest $args
     * @return ActivateTypeResponse
     */
    public function activateType(ActivateTypeRequest $args)
    {
        $result = parent::activateType($args->toArray());
        return new ActivateTypeResponse($result->toArray());
    }
}
