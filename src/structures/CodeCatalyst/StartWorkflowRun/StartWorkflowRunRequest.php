<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\StartWorkflowRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $workflowId
 * @property string $clientToken
 */
class StartWorkflowRunRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     workflowId: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
