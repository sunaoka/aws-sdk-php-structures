<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListDataIngestionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetName
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS' $Status
 */
class ListDataIngestionJobsRequest extends Request
{
    /**
     * @param array{
     *     DatasetName?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
