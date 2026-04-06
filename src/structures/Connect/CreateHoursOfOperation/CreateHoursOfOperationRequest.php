<?php

namespace Sunaoka\Aws\Structures\Connect\CreateHoursOfOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string|null $Description
 * @property string $TimeZone
 * @property list<Shapes\HoursOfOperationConfig> $Config
 * @property list<Shapes\ParentHoursOfOperationConfig>|null $ParentHoursOfOperationConfigs
 * @property array<string, string>|null $Tags
 */
class CreateHoursOfOperationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string|null,
     *     TimeZone: string,
     *     Config: list<Shapes\HoursOfOperationConfig>,
     *     ParentHoursOfOperationConfigs?: list<Shapes\ParentHoursOfOperationConfig>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
