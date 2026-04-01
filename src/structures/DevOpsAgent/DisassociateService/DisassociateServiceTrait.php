<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DisassociateService;

trait DisassociateServiceTrait
{
    /**
     * @param DisassociateServiceRequest $args
     * @return DisassociateServiceResponse
     */
    public function disassociateService(DisassociateServiceRequest $args)
    {
        $result = parent::disassociateService($args->toArray());
        return new DisassociateServiceResponse($result->toArray());
    }
}
