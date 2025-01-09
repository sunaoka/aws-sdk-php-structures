<?php

namespace Sunaoka\Aws\Structures\SesV2\GetSuppressedDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MessageId
 * @property string $FeedbackId
 */
class SuppressedDestinationAttributes extends Shape
{
    /**
     * @param array{
     *     MessageId?: string,
     *     FeedbackId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
