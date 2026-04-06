<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DescribePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo'|null $format
 * @property string|null $namespace
 * @property string|null $name
 * @property PackageOriginConfiguration|null $originConfiguration
 */
class PackageDescription extends Shape
{
    /**
     * @param array{
     *     format?: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo'|null,
     *     namespace?: string|null,
     *     name?: string|null,
     *     originConfiguration?: PackageOriginConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
