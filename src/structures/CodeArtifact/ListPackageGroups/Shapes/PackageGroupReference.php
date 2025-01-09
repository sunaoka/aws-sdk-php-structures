<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $pattern
 */
class PackageGroupReference extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     pattern?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
