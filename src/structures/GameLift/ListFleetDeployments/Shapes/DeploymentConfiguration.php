<?php

namespace Sunaoka\Aws\Structures\GameLift\ListFleetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WITH_PROTECTION'|'IGNORE_PROTECTION' $ProtectionStrategy
 * @property int<30, 75> $MinimumHealthyPercentage
 * @property 'MAINTAIN'|'ROLLBACK' $ImpairmentStrategy
 */
class DeploymentConfiguration extends Shape
{
    /**
     * @param array{
     *     ProtectionStrategy?: 'WITH_PROTECTION'|'IGNORE_PROTECTION',
     *     MinimumHealthyPercentage?: int<30, 75>,
     *     ImpairmentStrategy?: 'MAINTAIN'|'ROLLBACK'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
