<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Zone
 * @property string $SubnetArn
 */
class AWSLocation extends Shape
{
    /**
     * @param array{
     *     Zone?: string,
     *     SubnetArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
