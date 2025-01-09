<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\PutPackageOriginConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PackageOriginRestrictions $restrictions
 */
class PackageOriginConfiguration extends Shape
{
    /**
     * @param array{restrictions?: PackageOriginRestrictions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
