<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetWorkflows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 * @property bool $IncludeGraph
 */
class BatchGetWorkflowsRequest extends Request
{
    /**
     * @param array{
     *     Names: list<string>,
     *     IncludeGraph?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
