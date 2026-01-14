<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateHoursOfOperationOverride;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $HoursOfOperationId
 * @property string $HoursOfOperationOverrideId
 * @property string|null $Name
 * @property string|null $Description
 * @property list<Shapes\HoursOfOperationOverrideConfig>|null $Config
 * @property string|null $EffectiveFrom
 * @property string|null $EffectiveTill
 * @property Shapes\RecurrenceConfig|null $RecurrenceConfig
 * @property 'STANDARD'|'OPEN'|'CLOSED'|null $OverrideType
 */
class UpdateHoursOfOperationOverrideRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     HoursOfOperationId: string,
     *     HoursOfOperationOverrideId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Config?: list<Shapes\HoursOfOperationOverrideConfig>|null,
     *     EffectiveFrom?: string|null,
     *     EffectiveTill?: string|null,
     *     RecurrenceConfig?: Shapes\RecurrenceConfig|null,
     *     OverrideType?: 'STANDARD'|'OPEN'|'CLOSED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
