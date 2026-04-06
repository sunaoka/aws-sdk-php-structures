<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListApplicationOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 50>|null $Limit
 * @property string|null $NextToken
 * @property string|null $Operation
 * @property 'IN_PROGRESS'|'CANCELLED'|'SUCCESSFUL'|'FAILED'|null $OperationStatus
 */
class ListApplicationOperationsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     Limit?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     Operation?: string|null,
     *     OperationStatus?: 'IN_PROGRESS'|'CANCELLED'|'SUCCESSFUL'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
