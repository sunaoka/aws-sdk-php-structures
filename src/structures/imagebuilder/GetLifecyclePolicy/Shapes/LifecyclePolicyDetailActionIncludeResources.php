<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $amis
 * @property bool $snapshots
 * @property bool $containers
 */
class LifecyclePolicyDetailActionIncludeResources extends Shape
{
    /**
     * @param array{
     *     amis?: bool,
     *     snapshots?: bool,
     *     containers?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
