<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyTargetGroupAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetGroupArn
 * @property list<Shapes\TargetGroupAttribute> $Attributes
 */
class ModifyTargetGroupAttributesRequest extends Request
{
    /**
     * @param array{
     *     TargetGroupArn: string,
     *     Attributes: list<Shapes\TargetGroupAttribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
