<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\CreateRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 */
class UpstreamRepository extends Shape
{
    /**
     * @param array{repositoryName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
