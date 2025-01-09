<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'hours'|'minutes'|'seconds'|'milliseconds' $durationType
 * @property int $value
 */
class Duration extends Shape
{
    /**
     * @param array{
     *     durationType: 'hours'|'minutes'|'seconds'|'milliseconds',
     *     value: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
