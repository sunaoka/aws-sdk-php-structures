<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageVersionDependencies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $namespace
 * @property string|null $package
 * @property string|null $dependencyType
 * @property string|null $versionRequirement
 */
class PackageDependency extends Shape
{
    /**
     * @param array{
     *     namespace?: string|null,
     *     package?: string|null,
     *     dependencyType?: string|null,
     *     versionRequirement?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
