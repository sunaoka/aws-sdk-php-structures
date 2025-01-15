<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $exportId
 * @property ExportResourceSpecification|null $resourceSpecification
 * @property 'LexJson'|'TSV'|'CSV'|null $fileFormat
 * @property 'InProgress'|'Completed'|'Failed'|'Deleting'|null $exportStatus
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class ExportSummary extends Shape
{
    /**
     * @param array{
     *     exportId?: string|null,
     *     resourceSpecification?: ExportResourceSpecification|null,
     *     fileFormat?: 'LexJson'|'TSV'|'CSV'|null,
     *     exportStatus?: 'InProgress'|'Completed'|'Failed'|'Deleting'|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
