<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeactivateType;

trait DeactivateTypeTrait
{
    /**
     * @param DeactivateTypeRequest $args
     * @return DeactivateTypeResponse
     */
    public function deactivateType(DeactivateTypeRequest $args)
    {
        $result = parent::deactivateType($args->toArray());
        return new DeactivateTypeResponse($result->toArray());
    }
}
