<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MessageBody
 * @property string $StatusCode
 * @property string $ContentType
 */
class FixedResponseActionConfig extends Shape
{
    /**
     * @param array{
     *     MessageBody?: string,
     *     StatusCode: string,
     *     ContentType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
