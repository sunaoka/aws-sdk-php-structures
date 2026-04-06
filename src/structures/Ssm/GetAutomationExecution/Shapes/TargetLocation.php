<?php

namespace Sunaoka\Aws\Structures\Ssm\GetAutomationExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Accounts
 * @property list<string>|null $Regions
 * @property string|null $TargetLocationMaxConcurrency
 * @property string|null $TargetLocationMaxErrors
 * @property string|null $ExecutionRoleName
 * @property AlarmConfiguration|null $TargetLocationAlarmConfiguration
 * @property bool|null $IncludeChildOrganizationUnits
 * @property list<string>|null $ExcludeAccounts
 * @property list<Target>|null $Targets
 * @property string|null $TargetsMaxConcurrency
 * @property string|null $TargetsMaxErrors
 */
class TargetLocation extends Shape
{
    /**
     * @param array{
     *     Accounts?: list<string>|null,
     *     Regions?: list<string>|null,
     *     TargetLocationMaxConcurrency?: string|null,
     *     TargetLocationMaxErrors?: string|null,
     *     ExecutionRoleName?: string|null,
     *     TargetLocationAlarmConfiguration?: AlarmConfiguration|null,
     *     IncludeChildOrganizationUnits?: bool|null,
     *     ExcludeAccounts?: list<string>|null,
     *     Targets?: list<Target>|null,
     *     TargetsMaxConcurrency?: string|null,
     *     TargetsMaxErrors?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
