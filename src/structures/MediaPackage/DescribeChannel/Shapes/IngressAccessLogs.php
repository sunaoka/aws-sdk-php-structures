<?php

namespace Sunaoka\Aws\Structures\MediaPackage\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogGroupName
 */
class IngressAccessLogs extends Shape
{
    /**
     * @param array{LogGroupName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
