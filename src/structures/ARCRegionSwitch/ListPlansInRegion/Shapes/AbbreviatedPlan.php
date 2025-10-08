<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListPlansInRegion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $owner
 * @property string $name
 * @property list<string> $regions
 * @property 'activeActive'|'activePassive' $recoveryApproach
 * @property string|null $primaryRegion
 * @property string|null $version
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $description
 * @property string|null $executionRole
 * @property string|null $activePlanExecution
 * @property int<1, 10080>|null $recoveryTimeObjectiveMinutes
 */
class AbbreviatedPlan extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     owner: string,
     *     name: string,
     *     regions: list<string>,
     *     recoveryApproach: 'activeActive'|'activePassive',
     *     primaryRegion?: string|null,
     *     version?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     executionRole?: string|null,
     *     activePlanExecution?: string|null,
     *     recoveryTimeObjectiveMinutes?: int<1, 10080>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
