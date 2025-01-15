<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflowSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $WorkflowId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetWorkflowStepsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     WorkflowId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
