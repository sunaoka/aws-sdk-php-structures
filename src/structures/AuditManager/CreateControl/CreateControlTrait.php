<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateControl;

trait CreateControlTrait
{
    /**
     * @param CreateControlRequest $args
     * @return CreateControlResponse
     */
    public function createControl(CreateControlRequest $args)
    {
        $result = parent::createControl($args->toArray());
        return new CreateControlResponse($result->toArray());
    }
}
