<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeletePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string $namespace
 * @property string $package
 * @property PackageOriginConfiguration $originConfiguration
 */
class PackageSummary extends Shape
{
    /**
     * @param array{
     *     format?: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string,
     *     package?: string,
     *     originConfiguration?: PackageOriginConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
