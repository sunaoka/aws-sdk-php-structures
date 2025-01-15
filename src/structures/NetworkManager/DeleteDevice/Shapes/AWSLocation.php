<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Zone
 * @property string|null $SubnetArn
 */
class AWSLocation extends Shape
{
    /**
     * @param array{
     *     Zone?: string|null,
     *     SubnetArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
