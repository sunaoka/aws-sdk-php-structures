<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property int $StatusCode
 */
class EventItemResponse extends Shape
{
    /**
     * @param array{
     *     Message?: string,
     *     StatusCode?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
