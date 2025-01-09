<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackResourceDrifts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property list<'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED'> $StackResourceDriftStatusFilters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class DescribeStackResourceDriftsRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     StackResourceDriftStatusFilters?: list<'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED'>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
