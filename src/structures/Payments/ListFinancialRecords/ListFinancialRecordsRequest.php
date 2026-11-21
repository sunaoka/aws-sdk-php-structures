<?php

namespace Sunaoka\Aws\Structures\Payments\ListFinancialRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'INVOICE'|'CREDIT_MEMO'> $types
 * @property list<'OPEN'|'CLOSED'>|null $settlementStatuses
 * @property \Aws\Api\DateTimeResult|null $issuedAfter
 * @property \Aws\Api\DateTimeResult|null $issuedBefore
 * @property 'ISSUED_AT'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListFinancialRecordsRequest extends Request
{
    /**
     * @param array{
     *     types: list<'INVOICE'|'CREDIT_MEMO'>,
     *     settlementStatuses?: list<'OPEN'|'CLOSED'>|null,
     *     issuedAfter?: \Aws\Api\DateTimeResult|null,
     *     issuedBefore?: \Aws\Api\DateTimeResult|null,
     *     sortBy?: 'ISSUED_AT'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
