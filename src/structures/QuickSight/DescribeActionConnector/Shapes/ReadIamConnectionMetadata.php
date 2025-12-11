<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string $SourceArn
 */
class ReadIamConnectionMetadata extends Shape
{
    /**
     * @param array{
     *     RoleArn: string,
     *     SourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
