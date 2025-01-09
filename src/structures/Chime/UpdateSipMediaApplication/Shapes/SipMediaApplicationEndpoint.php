<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateSipMediaApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LambdaArn
 */
class SipMediaApplicationEndpoint extends Shape
{
    /**
     * @param array{LambdaArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
