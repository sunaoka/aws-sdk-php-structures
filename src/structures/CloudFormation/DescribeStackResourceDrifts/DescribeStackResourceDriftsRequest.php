<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackResourceDrifts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property list<'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED'|'UNKNOWN'>|null $StackResourceDriftStatusFilters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeStackResourceDriftsRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     StackResourceDriftStatusFilters?: list<'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED'|'UNKNOWN'>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
