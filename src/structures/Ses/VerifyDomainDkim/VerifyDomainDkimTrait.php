<?php

namespace Sunaoka\Aws\Structures\Ses\VerifyDomainDkim;

trait VerifyDomainDkimTrait
{
    /**
     * @param VerifyDomainDkimRequest $args
     * @return VerifyDomainDkimResponse
     */
    public function verifyDomainDkim(VerifyDomainDkimRequest $args)
    {
        $result = parent::verifyDomainDkim($args->toArray());
        return new VerifyDomainDkimResponse($result->toArray());
    }
}
