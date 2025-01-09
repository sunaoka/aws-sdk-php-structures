<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflowSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $WorkflowId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class GetWorkflowStepsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     WorkflowId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
