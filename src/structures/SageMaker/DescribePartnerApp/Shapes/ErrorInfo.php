<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePartnerApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Code
 * @property string $Reason
 */
class ErrorInfo extends Shape
{
    /**
     * @param array{
     *     Code?: string,
     *     Reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
