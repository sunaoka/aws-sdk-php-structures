<?php

namespace Sunaoka\Aws\Structures\Lambda\GetCodeSigningConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Warn'|'Enforce'|null $UntrustedArtifactOnDeployment
 */
class CodeSigningPolicies extends Shape
{
    /**
     * @param array{UntrustedArtifactOnDeployment?: 'Warn'|'Enforce'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
