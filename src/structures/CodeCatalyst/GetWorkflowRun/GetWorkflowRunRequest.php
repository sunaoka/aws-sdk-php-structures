<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetWorkflowRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $id
 * @property string $projectName
 */
class GetWorkflowRunRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     id: string,
     *     projectName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
