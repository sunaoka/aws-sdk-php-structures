<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\StopThreatModelJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $threatModelJobId
 */
class StopThreatModelJobRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     threatModelJobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
