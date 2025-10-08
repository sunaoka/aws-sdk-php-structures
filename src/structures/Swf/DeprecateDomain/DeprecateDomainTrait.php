<?php

namespace Sunaoka\Aws\Structures\Swf\DeprecateDomain;

trait DeprecateDomainTrait
{
    /**
     * @param DeprecateDomainRequest $args
     * @return void
     */
    public function deprecateDomain(DeprecateDomainRequest $args)
    {
        parent::deprecateDomain($args->toArray());
    }
}
