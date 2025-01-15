<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListDataIngestionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DatasetName
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|null $Status
 */
class ListDataIngestionJobsRequest extends Request
{
    /**
     * @param array{
     *     DatasetName?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
