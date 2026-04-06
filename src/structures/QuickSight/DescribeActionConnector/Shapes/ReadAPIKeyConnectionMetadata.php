<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseEndpoint
 * @property string|null $Email
 */
class ReadAPIKeyConnectionMetadata extends Shape
{
    /**
     * @param array{
     *     BaseEndpoint: string,
     *     Email?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
