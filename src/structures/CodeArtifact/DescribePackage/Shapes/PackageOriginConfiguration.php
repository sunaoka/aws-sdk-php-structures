<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DescribePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PackageOriginRestrictions|null $restrictions
 */
class PackageOriginConfiguration extends Shape
{
    /**
     * @param array{restrictions?: PackageOriginRestrictions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
