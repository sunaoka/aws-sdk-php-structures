<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListAssociatedPackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo'|null $format
 * @property string|null $namespace
 * @property string|null $package
 * @property 'STRONG'|'WEAK'|null $associationType
 */
class AssociatedPackage extends Shape
{
    /**
     * @param array{
     *     format?: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo'|null,
     *     namespace?: string|null,
     *     package?: string|null,
     *     associationType?: 'STRONG'|'WEAK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
