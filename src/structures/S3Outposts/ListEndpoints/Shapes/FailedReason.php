<?php

namespace Sunaoka\Aws\Structures\S3Outposts\ListEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 * @property string $Message
 */
class FailedReason extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
