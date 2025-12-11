<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseEndpoint
 * @property string $Username
 * @property string $Password
 */
class BasicAuthConnectionMetadata extends Shape
{
    /**
     * @param array{
     *     BaseEndpoint: string,
     *     Username: string,
     *     Password: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
