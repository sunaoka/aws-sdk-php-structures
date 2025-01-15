<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\ListDICOMImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $jobStatus
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListDICOMImportJobsRequest extends Request
{
    /**
     * @param array{
     *     datastoreId: string,
     *     jobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
