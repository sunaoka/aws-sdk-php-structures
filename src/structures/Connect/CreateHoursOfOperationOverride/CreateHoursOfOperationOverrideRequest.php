<?php

namespace Sunaoka\Aws\Structures\Connect\CreateHoursOfOperationOverride;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $HoursOfOperationId
 * @property string $Name
 * @property string $Description
 * @property list<Shapes\HoursOfOperationOverrideConfig> $Config
 * @property string $EffectiveFrom
 * @property string $EffectiveTill
 */
class CreateHoursOfOperationOverrideRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     HoursOfOperationId: string,
     *     Name: string,
     *     Description?: string,
     *     Config: list<Shapes\HoursOfOperationOverrideConfig>,
     *     EffectiveFrom: string,
     *     EffectiveTill: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
