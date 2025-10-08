<?php

namespace Sunaoka\Aws\Structures\Swf\RegisterDomain;

trait RegisterDomainTrait
{
    /**
     * @param RegisterDomainRequest $args
     * @return void
     */
    public function registerDomain(RegisterDomainRequest $args)
    {
        parent::registerDomain($args->toArray());
    }
}
