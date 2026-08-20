<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePartnerApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceArn
 * @property string|null $ApplicationArn
 */
class IdcConfigOutput extends Shape
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     ApplicationArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
