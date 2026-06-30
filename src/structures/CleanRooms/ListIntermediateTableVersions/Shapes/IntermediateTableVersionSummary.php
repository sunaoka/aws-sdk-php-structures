<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListIntermediateTableVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $versionId
 * @property string $tableId
 * @property \Aws\Api\DateTimeResult $createTime
 * @property string $analysisId
 * @property 'POPULATE_STARTED'|'POPULATE_SUCCESS'|'POPULATE_FAILED'|'RETENTION_PERIOD_EXPIRED' $status
 * @property 'QUERY' $analysisType
 * @property string|null $kmsKeyArn
 * @property \Aws\Api\DateTimeResult|null $expirationTime
 */
class IntermediateTableVersionSummary extends Shape
{
    /**
     * @param array{
     *     versionId: string,
     *     tableId: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     analysisId: string,
     *     status: 'POPULATE_STARTED'|'POPULATE_SUCCESS'|'POPULATE_FAILED'|'RETENTION_PERIOD_EXPIRED',
     *     analysisType: 'QUERY',
     *     kmsKeyArn?: string|null,
     *     expirationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
