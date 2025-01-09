<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyText
 * @property string $PolicyType
 * @property string $PolicyStatus
 */
class ParameterInlinePolicy extends Shape
{
    /**
     * @param array{
     *     PolicyText?: string,
     *     PolicyType?: string,
     *     PolicyStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
