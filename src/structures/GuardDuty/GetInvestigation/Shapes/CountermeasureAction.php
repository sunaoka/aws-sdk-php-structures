<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Title
 * @property string|null $Description
 * @property 'IMMEDIATE'|'SHORT_TERM'|'STRATEGIC'|null $Priority
 * @property string|null $DefenseTechnique
 * @property list<string>|null $Mitigates
 * @property list<string>|null $CliCommands
 * @property int|null $DispositionId
 * @property 'Isolated'|'Blocked'|'Deleted'|'Access Revoked'|'Logged'|null $Disposition
 * @property list<AffectedResource>|null $AffectedResources
 */
class CountermeasureAction extends Shape
{
    /**
     * @param array{
     *     Title?: string|null,
     *     Description?: string|null,
     *     Priority?: 'IMMEDIATE'|'SHORT_TERM'|'STRATEGIC'|null,
     *     DefenseTechnique?: string|null,
     *     Mitigates?: list<string>|null,
     *     CliCommands?: list<string>|null,
     *     DispositionId?: int|null,
     *     Disposition?: 'Isolated'|'Blocked'|'Deleted'|'Access Revoked'|'Logged'|null,
     *     AffectedResources?: list<AffectedResource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
