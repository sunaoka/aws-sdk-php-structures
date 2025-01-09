<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ExportTableToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $ExportFromTime
 * @property \Aws\Api\DateTimeResult $ExportToTime
 * @property 'NEW_IMAGE'|'NEW_AND_OLD_IMAGES' $ExportViewType
 */
class IncrementalExportSpecification extends Shape
{
    /**
     * @param array{
     *     ExportFromTime?: \Aws\Api\DateTimeResult,
     *     ExportToTime?: \Aws\Api\DateTimeResult,
     *     ExportViewType?: 'NEW_IMAGE'|'NEW_AND_OLD_IMAGES'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
