<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $InvestigationId
 * @property list<'OBSERVATION'|'ANALYSIS'|'UPDATE'|'FETCH'|'METADATA'>|null $RecordTypes
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListInvestigationRecordsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     InvestigationId: string,
     *     RecordTypes?: list<'OBSERVATION'|'ANALYSIS'|'UPDATE'|'FETCH'|'METADATA'>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
