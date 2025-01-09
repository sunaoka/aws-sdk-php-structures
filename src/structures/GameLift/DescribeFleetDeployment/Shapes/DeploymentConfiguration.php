<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WITH_PROTECTION'|'IGNORE_PROTECTION' $ProtectionStrategy
 * @property int $MinimumHealthyPercentage
 * @property 'MAINTAIN'|'ROLLBACK' $ImpairmentStrategy
 */
class DeploymentConfiguration extends Shape
{
    /**
     * @param array{
     *     ProtectionStrategy?: 'WITH_PROTECTION'|'IGNORE_PROTECTION',
     *     MinimumHealthyPercentage?: int,
     *     ImpairmentStrategy?: 'MAINTAIN'|'ROLLBACK'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
