<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $WorkflowId
 */
class DeleteWorkflowRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     WorkflowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
