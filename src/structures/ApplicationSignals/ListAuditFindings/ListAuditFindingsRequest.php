<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListAuditFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<string>|null $Auditors
 * @property list<Shapes\AuditTarget> $AuditTargets
 * @property 'BRIEF'|'DETAILED'|null $DetailLevel
 * @property string|null $NextToken
 * @property int<1, 10>|null $MaxResults
 */
class ListAuditFindingsRequest extends Request
{
    /**
     * @param array{
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     Auditors?: list<string>|null,
     *     AuditTargets: list<Shapes\AuditTarget>,
     *     DetailLevel?: 'BRIEF'|'DETAILED'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
