<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ORGANIZATION'|'MEMBER'|null $detailLevel
 * @property Shapes\ListCisScansFilterCriteria|null $filterCriteria
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'STATUS'|'SCHEDULED_BY'|'SCAN_START_DATE'|'FAILED_CHECKS'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 */
class ListCisScansRequest extends Request
{
    /**
     * @param array{
     *     detailLevel?: 'ORGANIZATION'|'MEMBER'|null,
     *     filterCriteria?: Shapes\ListCisScansFilterCriteria|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     sortBy?: 'STATUS'|'SCHEDULED_BY'|'SCAN_START_DATE'|'FAILED_CHECKS'|null,
     *     sortOrder?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
