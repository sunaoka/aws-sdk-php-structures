<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateHoursOfOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $HoursOfOperationId
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $TimeZone
 * @property list<Shapes\HoursOfOperationConfig>|null $Config
 */
class UpdateHoursOfOperationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     HoursOfOperationId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     TimeZone?: string|null,
     *     Config?: list<Shapes\HoursOfOperationConfig>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
