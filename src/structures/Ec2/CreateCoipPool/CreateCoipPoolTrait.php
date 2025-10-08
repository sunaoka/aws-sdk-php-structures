<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCoipPool;

trait CreateCoipPoolTrait
{
    /**
     * @param CreateCoipPoolRequest $args
     * @return CreateCoipPoolResponse
     */
    public function createCoipPool(CreateCoipPoolRequest $args)
    {
        $result = parent::createCoipPool($args->toArray());
        return new CreateCoipPoolResponse($result->toArray());
    }
}
