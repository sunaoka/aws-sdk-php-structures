<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ModuleConfiguration>|null $modules
 * @property list<Flow>|null $flows
 */
class LinkFlowParameters extends Shape
{
    /**
     * @param array{
     *     modules?: list<ModuleConfiguration>|null,
     *     flows?: list<Flow>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
