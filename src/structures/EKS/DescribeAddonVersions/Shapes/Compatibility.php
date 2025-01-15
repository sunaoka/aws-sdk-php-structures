<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddonVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clusterVersion
 * @property list<string>|null $platformVersions
 * @property bool|null $defaultVersion
 */
class Compatibility extends Shape
{
    /**
     * @param array{
     *     clusterVersion?: string|null,
     *     platformVersions?: list<string>|null,
     *     defaultVersion?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
