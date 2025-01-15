<?php

namespace Sunaoka\Aws\Structures\Ecs\SubmitTaskStateChange\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerName
 * @property 'ExecuteCommandAgent' $managedAgentName
 * @property string $status
 * @property string|null $reason
 */
class ManagedAgentStateChange extends Shape
{
    /**
     * @param array{
     *     containerName: string,
     *     managedAgentName: 'ExecuteCommandAgent',
     *     status: string,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
