<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteDomain;

trait DeleteDomainTrait
{
    /**
     * @param DeleteDomainRequest $args
     * @return void
     */
    public function deleteDomain(DeleteDomainRequest $args)
    {
        parent::deleteDomain($args->toArray());
    }
}
