<?php

namespace Sunaoka\Aws\Structures\Ec2\ConfirmProductInstance;

trait ConfirmProductInstanceTrait
{
    /**
     * @param ConfirmProductInstanceRequest $args
     * @return ConfirmProductInstanceResponse
     */
    public function confirmProductInstance(ConfirmProductInstanceRequest $args)
    {
        $result = parent::confirmProductInstance($args->toArray());
        return new ConfirmProductInstanceResponse($result->toArray());
    }
}
