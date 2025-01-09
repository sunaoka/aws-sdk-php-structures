<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecordFormat $RecordFormat
 * @property string $RecordEncoding
 * @property list<RecordColumn> $RecordColumns
 */
class SourceSchema extends Shape
{
    /**
     * @param array{
     *     RecordFormat: RecordFormat,
     *     RecordEncoding?: string,
     *     RecordColumns: list<RecordColumn>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
