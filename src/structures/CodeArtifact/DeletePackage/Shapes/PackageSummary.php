<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeletePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo'|null $format
 * @property string|null $namespace
 * @property string|null $package
 * @property PackageOriginConfiguration|null $originConfiguration
 */
class PackageSummary extends Shape
{
    /**
     * @param array{
     *     format?: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo'|null,
     *     namespace?: string|null,
     *     package?: string|null,
     *     originConfiguration?: PackageOriginConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
