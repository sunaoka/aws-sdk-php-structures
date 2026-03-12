<?php

namespace Sunaoka\Aws\Structures\SimpleDBv2\StartDomainExport;

trait StartDomainExportTrait
{
    /**
     * @param StartDomainExportRequest $args
     * @return StartDomainExportResponse
     */
    public function startDomainExport(StartDomainExportRequest $args)
    {
        $result = parent::startDomainExport($args->toArray());
        return new StartDomainExportResponse($result->toArray());
    }
}
