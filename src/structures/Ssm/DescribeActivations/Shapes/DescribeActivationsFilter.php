<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeActivations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ActivationIds'|'DefaultInstanceName'|'IamRole'|null $FilterKey
 * @property list<string>|null $FilterValues
 */
class DescribeActivationsFilter extends Shape
{
    /**
     * @param array{
     *     FilterKey?: 'ActivationIds'|'DefaultInstanceName'|'IamRole'|null,
     *     FilterValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
