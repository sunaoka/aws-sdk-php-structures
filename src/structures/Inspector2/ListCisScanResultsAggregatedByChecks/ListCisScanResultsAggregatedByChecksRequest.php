<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByChecks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CisScanResultsAggregatedByChecksFilterCriteria|null $filterCriteria
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $scanArn
 * @property 'CHECK_ID'|'TITLE'|'PLATFORM'|'FAILED_COUNTS'|'SECURITY_LEVEL'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 */
class ListCisScanResultsAggregatedByChecksRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\CisScanResultsAggregatedByChecksFilterCriteria|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     scanArn: string,
     *     sortBy?: 'CHECK_ID'|'TITLE'|'PLATFORM'|'FAILED_COUNTS'|'SECURITY_LEVEL'|null,
     *     sortOrder?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
