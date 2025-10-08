<?php

namespace Sunaoka\Aws\Structures\Route53Domains\PushDomain;

trait PushDomainTrait
{
    /**
     * @param PushDomainRequest $args
     * @return void
     */
    public function pushDomain(PushDomainRequest $args)
    {
        parent::pushDomain($args->toArray());
    }
}
