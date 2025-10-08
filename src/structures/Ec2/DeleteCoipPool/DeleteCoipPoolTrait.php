<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteCoipPool;

trait DeleteCoipPoolTrait
{
    /**
     * @param DeleteCoipPoolRequest $args
     * @return DeleteCoipPoolResponse
     */
    public function deleteCoipPool(DeleteCoipPoolRequest $args)
    {
        $result = parent::deleteCoipPool($args->toArray());
        return new DeleteCoipPoolResponse($result->toArray());
    }
}
