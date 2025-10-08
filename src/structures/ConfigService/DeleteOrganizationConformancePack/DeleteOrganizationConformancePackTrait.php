<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteOrganizationConformancePack;

trait DeleteOrganizationConformancePackTrait
{
    /**
     * @param DeleteOrganizationConformancePackRequest $args
     * @return void
     */
    public function deleteOrganizationConformancePack(DeleteOrganizationConformancePackRequest $args)
    {
        parent::deleteOrganizationConformancePack($args->toArray());
    }
}
