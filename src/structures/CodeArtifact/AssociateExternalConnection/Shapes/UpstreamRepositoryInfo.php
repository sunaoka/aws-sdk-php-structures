<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\AssociateExternalConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 */
class UpstreamRepositoryInfo extends Shape
{
    /**
     * @param array{repositoryName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
