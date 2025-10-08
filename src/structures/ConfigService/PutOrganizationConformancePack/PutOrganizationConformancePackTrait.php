<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutOrganizationConformancePack;

trait PutOrganizationConformancePackTrait
{
    /**
     * @param PutOrganizationConformancePackRequest $args
     * @return PutOrganizationConformancePackResponse
     */
    public function putOrganizationConformancePack(PutOrganizationConformancePackRequest $args)
    {
        $result = parent::putOrganizationConformancePack($args->toArray());
        return new PutOrganizationConformancePackResponse($result->toArray());
    }
}
