<?php

namespace Sunaoka\Aws\Structures\Omics\ListWorkflows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PRIVATE'|'READY2RUN'|null $type
 * @property string|null $name
 * @property string|null $startingToken
 * @property int<1, 100>|null $maxResults
 */
class ListWorkflowsRequest extends Request
{
    /**
     * @param array{
     *     type?: 'PRIVATE'|'READY2RUN'|null,
     *     name?: string|null,
     *     startingToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
