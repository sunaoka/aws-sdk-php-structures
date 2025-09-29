<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateTargetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $targetGroupIdentifier
 * @property Shapes\HealthCheckConfig $healthCheck
 */
class UpdateTargetGroupRequest extends Request
{
    /**
     * @param array{
     *     targetGroupIdentifier: string,
     *     healthCheck: Shapes\HealthCheckConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
