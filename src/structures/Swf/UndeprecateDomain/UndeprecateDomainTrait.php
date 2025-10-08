<?php

namespace Sunaoka\Aws\Structures\Swf\UndeprecateDomain;

trait UndeprecateDomainTrait
{
    /**
     * @param UndeprecateDomainRequest $args
     * @return void
     */
    public function undeprecateDomain(UndeprecateDomainRequest $args)
    {
        parent::undeprecateDomain($args->toArray());
    }
}
