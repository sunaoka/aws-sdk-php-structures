<?php

namespace Sunaoka\Aws\Structures\Omics\ListWorkflowVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowId
 * @property 'PRIVATE'|'READY2RUN'|null $type
 * @property string|null $workflowOwnerId
 * @property string|null $startingToken
 * @property int<1, 100>|null $maxResults
 */
class ListWorkflowVersionsRequest extends Request
{
    /**
     * @param array{
     *     workflowId: string,
     *     type?: 'PRIVATE'|'READY2RUN'|null,
     *     workflowOwnerId?: string|null,
     *     startingToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
