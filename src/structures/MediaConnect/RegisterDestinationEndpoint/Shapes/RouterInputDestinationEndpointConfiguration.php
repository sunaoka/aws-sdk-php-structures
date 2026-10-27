<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RegisterDestinationEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RouterInputArn
 */
class RouterInputDestinationEndpointConfiguration extends Shape
{
    /**
     * @param array{RouterInputArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
