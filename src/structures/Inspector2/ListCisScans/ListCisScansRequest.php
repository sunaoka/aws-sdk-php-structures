<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ORGANIZATION'|'MEMBER' $detailLevel
 * @property Shapes\ListCisScansFilterCriteria $filterCriteria
 * @property int $maxResults
 * @property string $nextToken
 * @property 'STATUS'|'SCHEDULED_BY'|'SCAN_START_DATE'|'FAILED_CHECKS' $sortBy
 * @property 'ASC'|'DESC' $sortOrder
 */
class ListCisScansRequest extends Request
{
    /**
     * @param array{
     *     detailLevel?: 'ORGANIZATION'|'MEMBER',
     *     filterCriteria?: Shapes\ListCisScansFilterCriteria,
     *     maxResults?: int,
     *     nextToken?: string,
     *     sortBy?: 'STATUS'|'SCHEDULED_BY'|'SCAN_START_DATE'|'FAILED_CHECKS',
     *     sortOrder?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
