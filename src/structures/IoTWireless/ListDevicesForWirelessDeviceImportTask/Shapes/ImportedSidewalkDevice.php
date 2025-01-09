<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListDevicesForWirelessDeviceImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SidewalkManufacturingSn
 * @property 'INITIALIZED'|'PENDING'|'ONBOARDED'|'FAILED' $OnboardingStatus
 * @property string $OnboardingStatusReason
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 */
class ImportedSidewalkDevice extends Shape
{
    /**
     * @param array{
     *     SidewalkManufacturingSn?: string,
     *     OnboardingStatus?: 'INITIALIZED'|'PENDING'|'ONBOARDED'|'FAILED',
     *     OnboardingStatusReason?: string,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
