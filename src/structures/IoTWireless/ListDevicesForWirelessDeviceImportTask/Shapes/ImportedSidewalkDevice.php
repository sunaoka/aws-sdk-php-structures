<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListDevicesForWirelessDeviceImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SidewalkManufacturingSn
 * @property 'INITIALIZED'|'PENDING'|'ONBOARDED'|'FAILED'|null $OnboardingStatus
 * @property string|null $OnboardingStatusReason
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 */
class ImportedSidewalkDevice extends Shape
{
    /**
     * @param array{
     *     SidewalkManufacturingSn?: string|null,
     *     OnboardingStatus?: 'INITIALIZED'|'PENDING'|'ONBOARDED'|'FAILED'|null,
     *     OnboardingStatusReason?: string|null,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
