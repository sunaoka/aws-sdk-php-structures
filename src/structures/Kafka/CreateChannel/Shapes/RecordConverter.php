<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BYTE_ARRAY'|'JSON'|'JSON_SCHEMA_GSR'|'STRING' $ValueConverter
 */
class RecordConverter extends Shape
{
    /**
     * @param array{ValueConverter: 'BYTE_ARRAY'|'JSON'|'JSON_SCHEMA_GSR'|'STRING'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
