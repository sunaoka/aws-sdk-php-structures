<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecordFormat $RecordFormat
 * @property string|null $RecordEncoding
 * @property list<RecordColumn> $RecordColumns
 */
class SourceSchema extends Shape
{
    /**
     * @param array{
     *     RecordFormat: RecordFormat,
     *     RecordEncoding?: string|null,
     *     RecordColumns: list<RecordColumn>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
