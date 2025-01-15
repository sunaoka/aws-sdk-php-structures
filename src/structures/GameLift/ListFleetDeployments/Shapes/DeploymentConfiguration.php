<?php

namespace Sunaoka\Aws\Structures\GameLift\ListFleetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WITH_PROTECTION'|'IGNORE_PROTECTION'|null $ProtectionStrategy
 * @property int<30, 75>|null $MinimumHealthyPercentage
 * @property 'MAINTAIN'|'ROLLBACK'|null $ImpairmentStrategy
 */
class DeploymentConfiguration extends Shape
{
    /**
     * @param array{
     *     ProtectionStrategy?: 'WITH_PROTECTION'|'IGNORE_PROTECTION'|null,
     *     MinimumHealthyPercentage?: int<30, 75>|null,
     *     ImpairmentStrategy?: 'MAINTAIN'|'ROLLBACK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
