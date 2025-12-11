<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientId
 * @property string $TokenEndpoint
 */
class ReadClientCredentialsGrantDetails extends Shape
{
    /**
     * @param array{
     *     ClientId: string,
     *     TokenEndpoint: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
