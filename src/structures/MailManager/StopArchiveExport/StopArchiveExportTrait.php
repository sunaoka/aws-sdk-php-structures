<?php

namespace Sunaoka\Aws\Structures\MailManager\StopArchiveExport;

trait StopArchiveExportTrait
{
    /**
     * @param StopArchiveExportRequest $args
     * @return StopArchiveExportResponse
     */
    public function stopArchiveExport(StopArchiveExportRequest $args)
    {
        $result = parent::stopArchiveExport($args->toArray());
        return new StopArchiveExportResponse($result->toArray());
    }
}
