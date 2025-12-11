<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\StartWorkflowRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkflowArn
 * @property string|null $ClientToken
 * @property array<string, Shapes\Document>|null $OverrideParameters
 * @property string|null $WorkflowVersion
 */
class StartWorkflowRunRequest extends Request
{
    /**
     * @param array{
     *     WorkflowArn: string,
     *     ClientToken?: string|null,
     *     OverrideParameters?: array<string, Shapes\Document>|null,
     *     WorkflowVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
