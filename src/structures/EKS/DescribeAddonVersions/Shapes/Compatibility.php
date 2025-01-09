<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddonVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterVersion
 * @property list<string> $platformVersions
 * @property bool $defaultVersion
 */
class Compatibility extends Shape
{
    /**
     * @param array{
     *     clusterVersion?: string,
     *     platformVersions?: list<string>,
     *     defaultVersion?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
