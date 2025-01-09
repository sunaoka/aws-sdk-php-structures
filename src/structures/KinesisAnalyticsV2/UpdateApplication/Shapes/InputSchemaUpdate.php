<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecordFormat $RecordFormatUpdate
 * @property string $RecordEncodingUpdate
 * @property list<RecordColumn> $RecordColumnUpdates
 */
class InputSchemaUpdate extends Shape
{
    /**
     * @param array{
     *     RecordFormatUpdate?: RecordFormat,
     *     RecordEncodingUpdate?: string,
     *     RecordColumnUpdates?: list<RecordColumn>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
