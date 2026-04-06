<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListAlarmMuteRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AlarmName
 * @property list<'SCHEDULED'|'ACTIVE'|'EXPIRED'>|null $Statuses
 * @property int<1, 100>|null $MaxRecords
 * @property string|null $NextToken
 */
class ListAlarmMuteRulesRequest extends Request
{
    /**
     * @param array{
     *     AlarmName?: string|null,
     *     Statuses?: list<'SCHEDULED'|'ACTIVE'|'EXPIRED'>|null,
     *     MaxRecords?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
