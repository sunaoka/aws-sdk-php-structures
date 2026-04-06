<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateTargetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\HealthCheckConfig $healthCheck
 * @property string $targetGroupIdentifier
 */
class UpdateTargetGroupRequest extends Request
{
    /**
     * @param array{
     *     healthCheck: Shapes\HealthCheckConfig,
     *     targetGroupIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
