<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DisassociateExternalConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryName
 */
class UpstreamRepositoryInfo extends Shape
{
    /**
     * @param array{repositoryName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
