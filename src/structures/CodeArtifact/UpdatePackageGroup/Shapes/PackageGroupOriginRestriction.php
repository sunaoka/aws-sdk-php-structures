<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdatePackageGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'ALLOW_SPECIFIC_REPOSITORIES'|'BLOCK'|'INHERIT'|null $mode
 * @property 'ALLOW'|'ALLOW_SPECIFIC_REPOSITORIES'|'BLOCK'|'INHERIT'|null $effectiveMode
 * @property PackageGroupReference|null $inheritedFrom
 * @property int|null $repositoriesCount
 */
class PackageGroupOriginRestriction extends Shape
{
    /**
     * @param array{
     *     mode?: 'ALLOW'|'ALLOW_SPECIFIC_REPOSITORIES'|'BLOCK'|'INHERIT'|null,
     *     effectiveMode?: 'ALLOW'|'ALLOW_SPECIFIC_REPOSITORIES'|'BLOCK'|'INHERIT'|null,
     *     inheritedFrom?: PackageGroupReference|null,
     *     repositoriesCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
