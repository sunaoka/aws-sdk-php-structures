<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $ExportFromTime
 * @property \Aws\Api\DateTimeResult|null $ExportToTime
 * @property 'NEW_IMAGE'|'NEW_AND_OLD_IMAGES'|null $ExportViewType
 */
class IncrementalExportSpecification extends Shape
{
    /**
     * @param array{
     *     ExportFromTime?: \Aws\Api\DateTimeResult|null,
     *     ExportToTime?: \Aws\Api\DateTimeResult|null,
     *     ExportViewType?: 'NEW_IMAGE'|'NEW_AND_OLD_IMAGES'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
