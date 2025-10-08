<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveExport;

trait GetArchiveExportTrait
{
    /**
     * @param GetArchiveExportRequest $args
     * @return GetArchiveExportResponse
     */
    public function getArchiveExport(GetArchiveExportRequest $args)
    {
        $result = parent::getArchiveExport($args->toArray());
        return new GetArchiveExportResponse($result->toArray());
    }
}
