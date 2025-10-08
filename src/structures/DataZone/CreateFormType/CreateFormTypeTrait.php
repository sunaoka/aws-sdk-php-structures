<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateFormType;

trait CreateFormTypeTrait
{
    /**
     * @param CreateFormTypeRequest $args
     * @return CreateFormTypeResponse
     */
    public function createFormType(CreateFormTypeRequest $args)
    {
        $result = parent::createFormType($args->toArray());
        return new CreateFormTypeResponse($result->toArray());
    }
}
