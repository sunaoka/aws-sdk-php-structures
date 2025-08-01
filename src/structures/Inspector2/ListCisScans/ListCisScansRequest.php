<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListCisScansFilterCriteria|null $filterCriteria
 * @property 'ORGANIZATION'|'MEMBER'|null $detailLevel
 * @property 'STATUS'|'SCHEDULED_BY'|'SCAN_START_DATE'|'FAILED_CHECKS'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListCisScansRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\ListCisScansFilterCriteria|null,
     *     detailLevel?: 'ORGANIZATION'|'MEMBER'|null,
     *     sortBy?: 'STATUS'|'SCHEDULED_BY'|'SCAN_START_DATE'|'FAILED_CHECKS'|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
