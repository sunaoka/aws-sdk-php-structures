<?php

namespace Sunaoka\Aws\Structures\MailManager\ListArchiveExports;

trait ListArchiveExportsTrait
{
    /**
     * @param ListArchiveExportsRequest $args
     * @return ListArchiveExportsResponse
     */
    public function listArchiveExports(ListArchiveExportsRequest $args)
    {
        $result = parent::listArchiveExports($args->toArray());
        return new ListArchiveExportsResponse($result->toArray());
    }
}
