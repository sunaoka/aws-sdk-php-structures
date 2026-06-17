<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\StartThreatModelJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $threatModelId
 */
class StartThreatModelJobRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     threatModelId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
