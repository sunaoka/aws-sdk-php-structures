<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $WorkflowId
 */
class GetWorkflowRequest extends Request
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
