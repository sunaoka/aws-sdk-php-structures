<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StackName
 * @property string|null $ChangeSetName
 * @property string|null $OperationId
 * @property Shapes\EventFilter|null $Filters
 * @property string|null $NextToken
 */
class DescribeEventsRequest extends Request
{
    /**
     * @param array{
     *     StackName?: string|null,
     *     ChangeSetName?: string|null,
     *     OperationId?: string|null,
     *     Filters?: Shapes\EventFilter|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
