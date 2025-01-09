<?php

namespace Sunaoka\Aws\Structures\Omics\ListWorkflows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PRIVATE'|'READY2RUN' $type
 * @property string $name
 * @property string $startingToken
 * @property int<1, 100> $maxResults
 */
class ListWorkflowsRequest extends Request
{
    /**
     * @param array{
     *     type?: 'PRIVATE'|'READY2RUN',
     *     name?: string,
     *     startingToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
