<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\WriteRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Value
 * @property 'DOUBLE'|'BIGINT'|'VARCHAR'|'BOOLEAN'|'TIMESTAMP'|'MULTI' $Type
 */
class MeasureValue extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Value: string,
     *     Type: 'DOUBLE'|'BIGINT'|'VARCHAR'|'BOOLEAN'|'TIMESTAMP'|'MULTI'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
