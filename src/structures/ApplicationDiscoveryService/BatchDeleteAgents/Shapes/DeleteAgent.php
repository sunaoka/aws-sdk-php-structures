<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\BatchDeleteAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentId
 * @property bool $force
 */
class DeleteAgent extends Shape
{
    /**
     * @param array{
     *     agentId: string,
     *     force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
