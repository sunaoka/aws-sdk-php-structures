<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceConfigurationArn
 * @property string $ResourceAssociationArn
 */
class DescribeConnectionResourceParameters extends Shape
{
    /**
     * @param array{
     *     ResourceConfigurationArn: string,
     *     ResourceAssociationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
