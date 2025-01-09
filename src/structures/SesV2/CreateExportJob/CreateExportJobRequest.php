<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ExportDataSource $ExportDataSource
 * @property Shapes\ExportDestination $ExportDestination
 */
class CreateExportJobRequest extends Request
{
    /**
     * @param array{
     *     ExportDataSource: Shapes\ExportDataSource,
     *     ExportDestination: Shapes\ExportDestination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
