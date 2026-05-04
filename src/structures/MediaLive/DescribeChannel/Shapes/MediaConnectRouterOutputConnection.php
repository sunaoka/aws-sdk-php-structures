<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RouterInputArn
 */
class MediaConnectRouterOutputConnection extends Shape
{
    /**
     * @param array{RouterInputArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
