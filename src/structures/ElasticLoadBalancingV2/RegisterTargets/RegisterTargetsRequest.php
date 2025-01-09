<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\RegisterTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetGroupArn
 * @property list<Shapes\TargetDescription> $Targets
 */
class RegisterTargetsRequest extends Request
{
    /**
     * @param array{
     *     TargetGroupArn: string,
     *     Targets: list<Shapes\TargetDescription>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
