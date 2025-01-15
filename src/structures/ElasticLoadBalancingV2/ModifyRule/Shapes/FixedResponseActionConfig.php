<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MessageBody
 * @property string $StatusCode
 * @property string|null $ContentType
 */
class FixedResponseActionConfig extends Shape
{
    /**
     * @param array{
     *     MessageBody?: string|null,
     *     StatusCode: string,
     *     ContentType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
