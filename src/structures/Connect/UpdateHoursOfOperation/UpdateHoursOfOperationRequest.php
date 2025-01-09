<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateHoursOfOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $HoursOfOperationId
 * @property string $Name
 * @property string $Description
 * @property string $TimeZone
 * @property list<Shapes\HoursOfOperationConfig> $Config
 */
class UpdateHoursOfOperationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     HoursOfOperationId: string,
     *     Name?: string,
     *     Description?: string,
     *     TimeZone?: string,
     *     Config?: list<Shapes\HoursOfOperationConfig>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
