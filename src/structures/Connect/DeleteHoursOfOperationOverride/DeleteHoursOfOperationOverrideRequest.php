<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteHoursOfOperationOverride;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $HoursOfOperationId
 * @property string $HoursOfOperationOverrideId
 */
class DeleteHoursOfOperationOverrideRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     HoursOfOperationId: string,
     *     HoursOfOperationOverrideId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
