<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $RunId
 * @property bool|null $IncludeGraph
 */
class GetWorkflowRunRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     RunId: string,
     *     IncludeGraph?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
