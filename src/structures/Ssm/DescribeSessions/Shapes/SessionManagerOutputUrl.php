<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputUrl
 * @property string $CloudWatchOutputUrl
 */
class SessionManagerOutputUrl extends Shape
{
    /**
     * @param array{
     *     S3OutputUrl?: string,
     *     CloudWatchOutputUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
