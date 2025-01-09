<?php

namespace Sunaoka\Aws\Structures\Lambda\ListCodeSigningConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Warn'|'Enforce' $UntrustedArtifactOnDeployment
 */
class CodeSigningPolicies extends Shape
{
    /**
     * @param array{UntrustedArtifactOnDeployment?: 'Warn'|'Enforce'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
