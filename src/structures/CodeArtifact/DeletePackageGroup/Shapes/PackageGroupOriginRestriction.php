<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeletePackageGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'ALLOW_SPECIFIC_REPOSITORIES'|'BLOCK'|'INHERIT' $mode
 * @property 'ALLOW'|'ALLOW_SPECIFIC_REPOSITORIES'|'BLOCK'|'INHERIT' $effectiveMode
 * @property PackageGroupReference $inheritedFrom
 * @property int $repositoriesCount
 */
class PackageGroupOriginRestriction extends Shape
{
    /**
     * @param array{
     *     mode?: 'ALLOW'|'ALLOW_SPECIFIC_REPOSITORIES'|'BLOCK'|'INHERIT',
     *     effectiveMode?: 'ALLOW'|'ALLOW_SPECIFIC_REPOSITORIES'|'BLOCK'|'INHERIT',
     *     inheritedFrom?: PackageGroupReference,
     *     repositoriesCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
