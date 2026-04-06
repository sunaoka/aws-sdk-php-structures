<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $pattern
 */
class PackageGroupReference extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     pattern?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
