<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackInstanceResourceDrifts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED'> $StackInstanceResourceDriftStatuses
 * @property string $StackInstanceAccount
 * @property string $StackInstanceRegion
 * @property string $OperationId
 * @property 'SELF'|'DELEGATED_ADMIN' $CallAs
 */
class ListStackInstanceResourceDriftsRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     StackInstanceResourceDriftStatuses?: list<'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED'>,
     *     StackInstanceAccount: string,
     *     StackInstanceRegion: string,
     *     OperationId: string,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
