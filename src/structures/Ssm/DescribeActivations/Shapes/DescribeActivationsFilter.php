<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeActivations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ActivationIds'|'DefaultInstanceName'|'IamRole' $FilterKey
 * @property list<string> $FilterValues
 */
class DescribeActivationsFilter extends Shape
{
    /**
     * @param array{
     *     FilterKey?: 'ActivationIds'|'DefaultInstanceName'|'IamRole',
     *     FilterValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
