<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListChangesets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $changesetId
 * @property string $changesetArn
 * @property string $datasetId
 * @property 'REPLACE'|'APPEND'|'MODIFY' $changeType
 * @property array<string, string> $sourceParams
 * @property array<string, string> $formatParams
 * @property int $createTime
 * @property 'PENDING'|'FAILED'|'SUCCESS'|'RUNNING'|'STOP_REQUESTED' $status
 * @property ChangesetErrorInfo $errorInfo
 * @property int $activeUntilTimestamp
 * @property int $activeFromTimestamp
 * @property string $updatesChangesetId
 * @property string $updatedByChangesetId
 */
class ChangesetSummary extends Shape
{
    /**
     * @param array{
     *     changesetId?: string,
     *     changesetArn?: string,
     *     datasetId?: string,
     *     changeType?: 'REPLACE'|'APPEND'|'MODIFY',
     *     sourceParams?: array<string, string>,
     *     formatParams?: array<string, string>,
     *     createTime?: int,
     *     status?: 'PENDING'|'FAILED'|'SUCCESS'|'RUNNING'|'STOP_REQUESTED',
     *     errorInfo?: ChangesetErrorInfo,
     *     activeUntilTimestamp?: int,
     *     activeFromTimestamp?: int,
     *     updatesChangesetId?: string,
     *     updatedByChangesetId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
