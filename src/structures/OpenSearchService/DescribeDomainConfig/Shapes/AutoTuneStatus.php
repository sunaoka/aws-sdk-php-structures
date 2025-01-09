<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $UpdateDate
 * @property int<0, max> $UpdateVersion
 * @property 'ENABLED'|'DISABLED'|'ENABLE_IN_PROGRESS'|'DISABLE_IN_PROGRESS'|'DISABLED_AND_ROLLBACK_SCHEDULED'|'DISABLED_AND_ROLLBACK_IN_PROGRESS'|'DISABLED_AND_ROLLBACK_COMPLETE'|'DISABLED_AND_ROLLBACK_ERROR'|'ERROR' $State
 * @property string $ErrorMessage
 * @property bool $PendingDeletion
 */
class AutoTuneStatus extends Shape
{
    /**
     * @param array{
     *     CreationDate: \Aws\Api\DateTimeResult,
     *     UpdateDate: \Aws\Api\DateTimeResult,
     *     UpdateVersion?: int<0, max>,
     *     State: 'ENABLED'|'DISABLED'|'ENABLE_IN_PROGRESS'|'DISABLE_IN_PROGRESS'|'DISABLED_AND_ROLLBACK_SCHEDULED'|'DISABLED_AND_ROLLBACK_IN_PROGRESS'|'DISABLED_AND_ROLLBACK_COMPLETE'|'DISABLED_AND_ROLLBACK_ERROR'|'ERROR',
     *     ErrorMessage?: string,
     *     PendingDeletion?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
