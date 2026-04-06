<?php

namespace Sunaoka\Aws\Structures\MailManager\StartArchiveExport;

trait StartArchiveExportTrait
{
    /**
     * @param StartArchiveExportRequest $args
     * @return StartArchiveExportResponse
     */
    public function startArchiveExport(StartArchiveExportRequest $args)
    {
        $result = parent::startArchiveExport($args->toArray());
        return new StartArchiveExportResponse($result->toArray());
    }
}
