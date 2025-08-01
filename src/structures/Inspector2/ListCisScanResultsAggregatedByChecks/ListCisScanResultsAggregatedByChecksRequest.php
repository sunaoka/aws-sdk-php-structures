<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByChecks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanArn
 * @property Shapes\CisScanResultsAggregatedByChecksFilterCriteria|null $filterCriteria
 * @property 'CHECK_ID'|'TITLE'|'PLATFORM'|'FAILED_COUNTS'|'SECURITY_LEVEL'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListCisScanResultsAggregatedByChecksRequest extends Request
{
    /**
     * @param array{
     *     scanArn: string,
     *     filterCriteria?: Shapes\CisScanResultsAggregatedByChecksFilterCriteria|null,
     *     sortBy?: 'CHECK_ID'|'TITLE'|'PLATFORM'|'FAILED_COUNTS'|'SECURITY_LEVEL'|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
