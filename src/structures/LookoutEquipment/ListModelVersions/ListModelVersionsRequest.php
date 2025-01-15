<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListModelVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED'|null $Status
 * @property 'TRAINING'|'RETRAINING'|'IMPORT'|null $SourceType
 * @property \Aws\Api\DateTimeResult|null $CreatedAtEndTime
 * @property \Aws\Api\DateTimeResult|null $CreatedAtStartTime
 * @property int<1, max>|null $MaxModelVersion
 * @property int<1, max>|null $MinModelVersion
 */
class ListModelVersionsRequest extends Request
{
    /**
     * @param array{
     *     ModelName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED'|null,
     *     SourceType?: 'TRAINING'|'RETRAINING'|'IMPORT'|null,
     *     CreatedAtEndTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedAtStartTime?: \Aws\Api\DateTimeResult|null,
     *     MaxModelVersion?: int<1, max>|null,
     *     MinModelVersion?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
