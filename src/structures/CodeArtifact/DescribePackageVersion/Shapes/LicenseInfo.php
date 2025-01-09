<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DescribePackageVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $url
 */
class LicenseInfo extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
