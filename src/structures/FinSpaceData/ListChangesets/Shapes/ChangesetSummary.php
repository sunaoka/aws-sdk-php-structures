<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListChangesets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $changesetId
 * @property string|null $changesetArn
 * @property string|null $datasetId
 * @property 'REPLACE'|'APPEND'|'MODIFY'|null $changeType
 * @property array<string, string>|null $sourceParams
 * @property array<string, string>|null $formatParams
 * @property int|null $createTime
 * @property 'PENDING'|'FAILED'|'SUCCESS'|'RUNNING'|'STOP_REQUESTED'|null $status
 * @property ChangesetErrorInfo|null $errorInfo
 * @property int|null $activeUntilTimestamp
 * @property int|null $activeFromTimestamp
 * @property string|null $updatesChangesetId
 * @property string|null $updatedByChangesetId
 */
class ChangesetSummary extends Shape
{
    /**
     * @param array{
     *     changesetId?: string|null,
     *     changesetArn?: string|null,
     *     datasetId?: string|null,
     *     changeType?: 'REPLACE'|'APPEND'|'MODIFY'|null,
     *     sourceParams?: array<string, string>|null,
     *     formatParams?: array<string, string>|null,
     *     createTime?: int|null,
     *     status?: 'PENDING'|'FAILED'|'SUCCESS'|'RUNNING'|'STOP_REQUESTED'|null,
     *     errorInfo?: ChangesetErrorInfo|null,
     *     activeUntilTimestamp?: int|null,
     *     activeFromTimestamp?: int|null,
     *     updatesChangesetId?: string|null,
     *     updatedByChangesetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
