<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeDraftAppVersionResourcesImportStatus;

trait DescribeDraftAppVersionResourcesImportStatusTrait
{
    /**
     * @param DescribeDraftAppVersionResourcesImportStatusRequest $args
     * @return DescribeDraftAppVersionResourcesImportStatusResponse
     */
    public function describeDraftAppVersionResourcesImportStatus(DescribeDraftAppVersionResourcesImportStatusRequest $args)
    {
        $result = parent::describeDraftAppVersionResourcesImportStatus($args->toArray());
        return new DescribeDraftAppVersionResourcesImportStatusResponse($result->toArray());
    }
}
