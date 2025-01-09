<?php

namespace Sunaoka\Aws\Structures\DSQL\CreateMultiRegionClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $deletionProtectionEnabled
 * @property array<string, string> $tags
 */
class LinkedClusterProperties extends Shape
{
    /**
     * @param array{
     *     deletionProtectionEnabled?: bool,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
