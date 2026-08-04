<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateApplicationStatusCheck;

trait DisassociateApplicationStatusCheckTrait
{
    /**
     * @param DisassociateApplicationStatusCheckRequest $args
     * @return DisassociateApplicationStatusCheckResponse
     */
    public function disassociateApplicationStatusCheck(DisassociateApplicationStatusCheckRequest $args)
    {
        $result = parent::disassociateApplicationStatusCheck($args->toArray());
        return new DisassociateApplicationStatusCheckResponse($result->toArray());
    }
}
