<?php

namespace Sunaoka\Aws\Structures\MarketplaceCommerceAnalytics\StartSupportDataExport;

trait StartSupportDataExportTrait
{
    /**
     * @param StartSupportDataExportRequest $args
     * @return StartSupportDataExportResponse
     */
    public function startSupportDataExport(StartSupportDataExportRequest $args)
    {
        $result = parent::startSupportDataExport($args->toArray());
        return new StartSupportDataExportResponse($result->toArray());
    }
}
