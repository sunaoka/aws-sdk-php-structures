<?php

namespace Sunaoka\Aws\Structures\Route53Domains\TransferDomain;

trait TransferDomainTrait
{
    /**
     * @param TransferDomainRequest $args
     * @return TransferDomainResponse
     */
    public function transferDomain(TransferDomainRequest $args)
    {
        $result = parent::transferDomain($args->toArray());
        return new TransferDomainResponse($result->toArray());
    }
}
