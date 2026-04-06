<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface|null $data
 */
class FieldsData extends Shape
{
    /**
     * @param array{data?: \Psr\Http\Message\StreamInterface|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
