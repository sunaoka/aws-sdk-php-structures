<?php

namespace Sunaoka\Aws\Structures\Connect\CreateHoursOfOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string $Description
 * @property string $TimeZone
 * @property list<Shapes\HoursOfOperationConfig> $Config
 * @property array<string, string> $Tags
 */
class CreateHoursOfOperationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string,
     *     TimeZone: string,
     *     Config: list<Shapes\HoursOfOperationConfig>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
