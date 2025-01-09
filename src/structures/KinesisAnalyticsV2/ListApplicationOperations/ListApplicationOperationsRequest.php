<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListApplicationOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 50> $Limit
 * @property string $NextToken
 * @property string $Operation
 * @property 'IN_PROGRESS'|'CANCELLED'|'SUCCESSFUL'|'FAILED' $OperationStatus
 */
class ListApplicationOperationsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     Limit?: int<1, 50>,
     *     NextToken?: string,
     *     Operation?: string,
     *     OperationStatus?: 'IN_PROGRESS'|'CANCELLED'|'SUCCESSFUL'|'FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
