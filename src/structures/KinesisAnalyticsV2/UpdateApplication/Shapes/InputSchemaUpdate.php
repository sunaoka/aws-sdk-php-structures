<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecordFormat|null $RecordFormatUpdate
 * @property string|null $RecordEncodingUpdate
 * @property list<RecordColumn>|null $RecordColumnUpdates
 */
class InputSchemaUpdate extends Shape
{
    /**
     * @param array{
     *     RecordFormatUpdate?: RecordFormat|null,
     *     RecordEncodingUpdate?: string|null,
     *     RecordColumnUpdates?: list<RecordColumn>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
