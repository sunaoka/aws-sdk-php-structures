<?php

namespace Sunaoka\Aws\Structures\DSQL\CreateMultiRegionClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $deletionProtectionEnabled
 * @property array<string, string>|null $tags
 */
class LinkedClusterProperties extends Shape
{
    /**
     * @param array{
     *     deletionProtectionEnabled?: bool|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
