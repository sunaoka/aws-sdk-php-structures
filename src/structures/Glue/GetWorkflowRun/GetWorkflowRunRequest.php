<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $RunId
 * @property bool $IncludeGraph
 */
class GetWorkflowRunRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     RunId: string,
     *     IncludeGraph?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
