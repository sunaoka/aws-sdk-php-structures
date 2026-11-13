<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Title
 * @property string|null $Rationale
 * @property 'ENABLE_PROTECTION'|'FURTHER_INVESTIGATION'|'SUPPRESSION_RULE'|'HARDENING'|'MONITORING'|null $Category
 * @property 'IMMEDIATE'|'SHORT_TERM'|'STRATEGIC'|null $Priority
 * @property list<string>|null $CliCommands
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     Title?: string|null,
     *     Rationale?: string|null,
     *     Category?: 'ENABLE_PROTECTION'|'FURTHER_INVESTIGATION'|'SUPPRESSION_RULE'|'HARDENING'|'MONITORING'|null,
     *     Priority?: 'IMMEDIATE'|'SHORT_TERM'|'STRATEGIC'|null,
     *     CliCommands?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
