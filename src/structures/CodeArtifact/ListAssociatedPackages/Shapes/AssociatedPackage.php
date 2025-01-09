<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListAssociatedPackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string $namespace
 * @property string $package
 * @property 'STRONG'|'WEAK' $associationType
 */
class AssociatedPackage extends Shape
{
    /**
     * @param array{
     *     format?: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string,
     *     package?: string,
     *     associationType?: 'STRONG'|'WEAK'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
