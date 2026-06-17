<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetThreatModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $threatModelIds
 * @property string $agentSpaceId
 */
class BatchGetThreatModelsRequest extends Request
{
    /**
     * @param array{
     *     threatModelIds: list<string>,
     *     agentSpaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
