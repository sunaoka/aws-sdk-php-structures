<?php

namespace Sunaoka\Aws\Structures\Glue\ResumeWorkflowRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $RunId
 * @property list<string> $NodeIds
 */
class ResumeWorkflowRunRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     RunId: string,
     *     NodeIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
