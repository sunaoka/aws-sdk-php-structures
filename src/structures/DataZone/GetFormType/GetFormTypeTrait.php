<?php

namespace Sunaoka\Aws\Structures\DataZone\GetFormType;

trait GetFormTypeTrait
{
    /**
     * @param GetFormTypeRequest $args
     * @return GetFormTypeResponse
     */
    public function getFormType(GetFormTypeRequest $args)
    {
        $result = parent::getFormType($args->toArray());
        return new GetFormTypeResponse($result->toArray());
    }
}
