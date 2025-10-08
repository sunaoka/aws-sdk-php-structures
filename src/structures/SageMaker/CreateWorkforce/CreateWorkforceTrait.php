<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateWorkforce;

trait CreateWorkforceTrait
{
    /**
     * @param CreateWorkforceRequest $args
     * @return CreateWorkforceResponse
     */
    public function createWorkforce(CreateWorkforceRequest $args)
    {
        $result = parent::createWorkforce($args->toArray());
        return new CreateWorkforceResponse($result->toArray());
    }
}
