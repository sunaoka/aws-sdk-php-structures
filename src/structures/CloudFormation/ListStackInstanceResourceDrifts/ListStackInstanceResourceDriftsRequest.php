<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackInstanceResourceDrifts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property list<'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED'|'UNKNOWN'>|null $StackInstanceResourceDriftStatuses
 * @property string $StackInstanceAccount
 * @property string $StackInstanceRegion
 * @property string $OperationId
 * @property 'SELF'|'DELEGATED_ADMIN'|null $CallAs
 */
class ListStackInstanceResourceDriftsRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     StackInstanceResourceDriftStatuses?: list<'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED'|'UNKNOWN'>|null,
     *     StackInstanceAccount: string,
     *     StackInstanceRegion: string,
     *     OperationId: string,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
