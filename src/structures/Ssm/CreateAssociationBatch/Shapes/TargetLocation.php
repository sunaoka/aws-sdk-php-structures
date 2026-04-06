<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateAssociationBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Accounts
 * @property list<string>|null $Regions
 * @property string|null $TargetLocationMaxConcurrency
 * @property string|null $TargetLocationMaxErrors
 * @property string|null $ExecutionRoleName
 * @property AlarmConfiguration|null $TargetLocationAlarmConfiguration
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
     *     TargetLocationAlarmConfiguration?: AlarmConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
