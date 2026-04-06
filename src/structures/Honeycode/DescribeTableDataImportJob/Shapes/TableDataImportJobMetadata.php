<?php

namespace Sunaoka\Aws\Structures\Honeycode\DescribeTableDataImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImportJobSubmitter $submitter
 * @property \Aws\Api\DateTimeResult $submitTime
 * @property ImportOptions $importOptions
 * @property ImportDataSource $dataSource
 */
class TableDataImportJobMetadata extends Shape
{
    /**
     * @param array{
     *     submitter: ImportJobSubmitter,
     *     submitTime: \Aws\Api\DateTimeResult,
     *     importOptions: ImportOptions,
     *     dataSource: ImportDataSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
