<?php

namespace Sunaoka\Aws\Structures\MPA\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ActionName'|'ApprovalTeamName'|'VotingTime'|'Vote'|'SessionStatus'|'InitiationTime'|null $FieldName
 * @property 'EQ'|'NE'|'GT'|'LT'|'GTE'|'LTE'|'CONTAINS'|'NOT_CONTAINS'|'BETWEEN'|null $Operator
 * @property string|null $Value
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'ActionName'|'ApprovalTeamName'|'VotingTime'|'Vote'|'SessionStatus'|'InitiationTime'|null,
     *     Operator?: 'EQ'|'NE'|'GT'|'LT'|'GTE'|'LTE'|'CONTAINS'|'NOT_CONTAINS'|'BETWEEN'|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
