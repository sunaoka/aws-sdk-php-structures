<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $exportId
 * @property ExportResourceSpecification $resourceSpecification
 * @property 'LexJson'|'TSV'|'CSV' $fileFormat
 * @property 'InProgress'|'Completed'|'Failed'|'Deleting' $exportStatus
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class ExportSummary extends Shape
{
    /**
     * @param array{
     *     exportId?: string,
     *     resourceSpecification?: ExportResourceSpecification,
     *     fileFormat?: 'LexJson'|'TSV'|'CSV',
     *     exportStatus?: 'InProgress'|'Completed'|'Failed'|'Deleting',
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
