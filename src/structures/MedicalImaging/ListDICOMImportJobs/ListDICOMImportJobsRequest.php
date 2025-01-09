<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\ListDICOMImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $jobStatus
 * @property string $nextToken
 * @property int<1, 50> $maxResults
 */
class ListDICOMImportJobsRequest extends Request
{
    /**
     * @param array{
     *     datastoreId: string,
     *     jobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     nextToken?: string,
     *     maxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
