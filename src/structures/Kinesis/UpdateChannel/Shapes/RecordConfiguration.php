<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GSR_JSON'|'JSON'|'STRING'|'BYTE_ARRAY' $RecordFormatType
 * @property string|null $GSRSchemaARN
 */
class RecordConfiguration extends Shape
{
    /**
     * @param array{
     *     RecordFormatType: 'GSR_JSON'|'JSON'|'STRING'|'BYTE_ARRAY',
     *     GSRSchemaARN?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
