<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetThreats;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $threatIds
 * @property string $agentSpaceId
 */
class BatchGetThreatsRequest extends Request
{
    /**
     * @param array{
     *     threatIds: list<string>,
     *     agentSpaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
