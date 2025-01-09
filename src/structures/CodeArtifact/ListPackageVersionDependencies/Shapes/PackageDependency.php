<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageVersionDependencies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $namespace
 * @property string $package
 * @property string $dependencyType
 * @property string $versionRequirement
 */
class PackageDependency extends Shape
{
    /**
     * @param array{
     *     namespace?: string,
     *     package?: string,
     *     dependencyType?: string,
     *     versionRequirement?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
