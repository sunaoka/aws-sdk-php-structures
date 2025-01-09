<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $alertTargetArn
 * @property string $roleArn
 */
class AlertTarget extends Shape
{
    /**
     * @param array{
     *     alertTargetArn: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
