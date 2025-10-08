<?php

namespace Sunaoka\Aws\Structures\Route53Domains\CheckDomainTransferability;

trait CheckDomainTransferabilityTrait
{
    /**
     * @param CheckDomainTransferabilityRequest $args
     * @return CheckDomainTransferabilityResponse
     */
    public function checkDomainTransferability(CheckDomainTransferabilityRequest $args)
    {
        $result = parent::checkDomainTransferability($args->toArray());
        return new CheckDomainTransferabilityResponse($result->toArray());
    }
}
