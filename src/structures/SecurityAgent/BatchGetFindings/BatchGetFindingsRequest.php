<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $findingIds
 * @property string $agentSpaceId
 */
class BatchGetFindingsRequest extends Request
{
    /**
     * @param array{
     *     findingIds: list<string>,
     *     agentSpaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
