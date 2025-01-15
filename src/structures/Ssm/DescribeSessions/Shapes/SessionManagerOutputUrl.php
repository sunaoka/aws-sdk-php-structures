<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3OutputUrl
 * @property string|null $CloudWatchOutputUrl
 */
class SessionManagerOutputUrl extends Shape
{
    /**
     * @param array{
     *     S3OutputUrl?: string|null,
     *     CloudWatchOutputUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
