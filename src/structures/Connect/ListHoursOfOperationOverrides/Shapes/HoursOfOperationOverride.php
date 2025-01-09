<?php

namespace Sunaoka\Aws\Structures\Connect\ListHoursOfOperationOverrides\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HoursOfOperationOverrideId
 * @property string $HoursOfOperationId
 * @property string $HoursOfOperationArn
 * @property string $Name
 * @property string $Description
 * @property list<HoursOfOperationOverrideConfig> $Config
 * @property string $EffectiveFrom
 * @property string $EffectiveTill
 */
class HoursOfOperationOverride extends Shape
{
    /**
     * @param array{
     *     HoursOfOperationOverrideId?: string,
     *     HoursOfOperationId?: string,
     *     HoursOfOperationArn?: string,
     *     Name?: string,
     *     Description?: string,
     *     Config?: list<HoursOfOperationOverrideConfig>,
     *     EffectiveFrom?: string,
     *     EffectiveTill?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
