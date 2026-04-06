<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePartnerApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Code
 * @property string|null $Reason
 */
class ErrorInfo extends Shape
{
    /**
     * @param array{
     *     Code?: string|null,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
