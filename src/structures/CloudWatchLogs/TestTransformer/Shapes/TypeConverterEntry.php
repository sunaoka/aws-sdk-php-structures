<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property 'boolean'|'integer'|'double'|'string' $type
 */
class TypeConverterEntry extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     type: 'boolean'|'integer'|'double'|'string'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
