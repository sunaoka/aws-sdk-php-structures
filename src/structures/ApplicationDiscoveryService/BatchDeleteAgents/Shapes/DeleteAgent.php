<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\BatchDeleteAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentId
 * @property bool|null $force
 */
class DeleteAgent extends Shape
{
    /**
     * @param array{
     *     agentId: string,
     *     force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
