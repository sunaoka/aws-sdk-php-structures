<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeletePackageGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'EXTERNAL_UPSTREAM'|'INTERNAL_UPSTREAM'|'PUBLISH', PackageGroupOriginRestriction>|null $restrictions
 */
class PackageGroupOriginConfiguration extends Shape
{
    /**
     * @param array{restrictions?: array<'EXTERNAL_UPSTREAM'|'INTERNAL_UPSTREAM'|'PUBLISH', PackageGroupOriginRestriction>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
