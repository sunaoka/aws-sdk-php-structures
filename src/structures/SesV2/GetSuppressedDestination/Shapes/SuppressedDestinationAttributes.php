<?php

namespace Sunaoka\Aws\Structures\SesV2\GetSuppressedDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MessageId
 * @property string|null $FeedbackId
 */
class SuppressedDestinationAttributes extends Shape
{
    /**
     * @param array{
     *     MessageId?: string|null,
     *     FeedbackId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
