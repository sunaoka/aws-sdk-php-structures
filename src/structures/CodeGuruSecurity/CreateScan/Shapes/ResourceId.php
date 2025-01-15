<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\CreateScan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $codeArtifactId
 */
class ResourceId extends Shape
{
    /**
     * @param array{codeArtifactId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
