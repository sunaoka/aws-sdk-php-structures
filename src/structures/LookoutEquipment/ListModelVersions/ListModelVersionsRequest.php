<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListModelVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED' $Status
 * @property 'TRAINING'|'RETRAINING'|'IMPORT' $SourceType
 * @property \Aws\Api\DateTimeResult $CreatedAtEndTime
 * @property \Aws\Api\DateTimeResult $CreatedAtStartTime
 * @property int<1, max> $MaxModelVersion
 * @property int<1, max> $MinModelVersion
 */
class ListModelVersionsRequest extends Request
{
    /**
     * @param array{
     *     ModelName: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED',
     *     SourceType?: 'TRAINING'|'RETRAINING'|'IMPORT',
     *     CreatedAtEndTime?: \Aws\Api\DateTimeResult,
     *     CreatedAtStartTime?: \Aws\Api\DateTimeResult,
     *     MaxModelVersion?: int<1, max>,
     *     MinModelVersion?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
