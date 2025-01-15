<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 * @property int|null $StatusCode
 */
class EndpointItemResponse extends Shape
{
    /**
     * @param array{
     *     Message?: string|null,
     *     StatusCode?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
