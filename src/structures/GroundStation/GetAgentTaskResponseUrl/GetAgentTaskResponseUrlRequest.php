<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetAgentTaskResponseUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $taskId
 */
class GetAgentTaskResponseUrlRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
