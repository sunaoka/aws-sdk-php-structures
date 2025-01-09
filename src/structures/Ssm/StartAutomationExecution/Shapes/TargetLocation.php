<?php

namespace Sunaoka\Aws\Structures\Ssm\StartAutomationExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Accounts
 * @property list<string> $Regions
 * @property string $TargetLocationMaxConcurrency
 * @property string $TargetLocationMaxErrors
 * @property string $ExecutionRoleName
 * @property AlarmConfiguration $TargetLocationAlarmConfiguration
 * @property bool $IncludeChildOrganizationUnits
 * @property list<string> $ExcludeAccounts
 * @property list<Target> $Targets
 * @property string $TargetsMaxConcurrency
 * @property string $TargetsMaxErrors
 */
class TargetLocation extends Shape
{
    /**
     * @param array{
     *     Accounts?: list<string>,
     *     Regions?: list<string>,
     *     TargetLocationMaxConcurrency?: string,
     *     TargetLocationMaxErrors?: string,
     *     ExecutionRoleName?: string,
     *     TargetLocationAlarmConfiguration?: AlarmConfiguration,
     *     IncludeChildOrganizationUnits?: bool,
     *     ExcludeAccounts?: list<string>,
     *     Targets?: list<Target>,
     *     TargetsMaxConcurrency?: string,
     *     TargetsMaxErrors?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
