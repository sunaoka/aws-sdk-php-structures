<?php

namespace Sunaoka\Aws\Structures\Honeycode\DescribeTableDataImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workbookId
 * @property string $tableId
 * @property string $jobId
 */
class DescribeTableDataImportJobRequest extends Request
{
    /**
     * @param array{
     *     workbookId: string,
     *     tableId: string,
     *     jobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
