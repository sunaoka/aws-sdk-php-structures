<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateApplicationStatusCheck;

trait AssociateApplicationStatusCheckTrait
{
    /**
     * @param AssociateApplicationStatusCheckRequest $args
     * @return AssociateApplicationStatusCheckResponse
     */
    public function associateApplicationStatusCheck(AssociateApplicationStatusCheckRequest $args)
    {
        $result = parent::associateApplicationStatusCheck($args->toArray());
        return new AssociateApplicationStatusCheckResponse($result->toArray());
    }
}
