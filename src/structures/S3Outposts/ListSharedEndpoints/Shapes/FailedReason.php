<?php

namespace Sunaoka\Aws\Structures\S3Outposts\ListSharedEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorCode
 * @property string|null $Message
 */
class FailedReason extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
