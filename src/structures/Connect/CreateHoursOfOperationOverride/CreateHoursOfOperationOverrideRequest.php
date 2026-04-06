<?php

namespace Sunaoka\Aws\Structures\Connect\CreateHoursOfOperationOverride;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $HoursOfOperationId
 * @property string $Name
 * @property string|null $Description
 * @property list<Shapes\HoursOfOperationOverrideConfig> $Config
 * @property string $EffectiveFrom
 * @property string $EffectiveTill
 * @property Shapes\RecurrenceConfig|null $RecurrenceConfig
 * @property 'STANDARD'|'OPEN'|'CLOSED'|null $OverrideType
 */
class CreateHoursOfOperationOverrideRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     HoursOfOperationId: string,
     *     Name: string,
     *     Description?: string|null,
     *     Config: list<Shapes\HoursOfOperationOverrideConfig>,
     *     EffectiveFrom: string,
     *     EffectiveTill: string,
     *     RecurrenceConfig?: Shapes\RecurrenceConfig|null,
     *     OverrideType?: 'STANDARD'|'OPEN'|'CLOSED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
