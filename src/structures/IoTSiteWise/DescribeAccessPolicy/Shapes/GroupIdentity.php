<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAccessPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 */
class GroupIdentity extends Shape
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
