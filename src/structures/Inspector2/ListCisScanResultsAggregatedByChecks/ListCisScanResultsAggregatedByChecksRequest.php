<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByChecks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CisScanResultsAggregatedByChecksFilterCriteria $filterCriteria
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $scanArn
 * @property 'CHECK_ID'|'TITLE'|'PLATFORM'|'FAILED_COUNTS'|'SECURITY_LEVEL' $sortBy
 * @property 'ASC'|'DESC' $sortOrder
 */
class ListCisScanResultsAggregatedByChecksRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\CisScanResultsAggregatedByChecksFilterCriteria,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     scanArn: string,
     *     sortBy?: 'CHECK_ID'|'TITLE'|'PLATFORM'|'FAILED_COUNTS'|'SECURITY_LEVEL',
     *     sortOrder?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
