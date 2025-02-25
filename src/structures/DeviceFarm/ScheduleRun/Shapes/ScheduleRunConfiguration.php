<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ScheduleRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $extraDataPackageArn
 * @property string|null $networkProfileArn
 * @property string|null $locale
 * @property Location|null $location
 * @property list<string>|null $vpceConfigurationArns
 * @property DeviceProxy|null $deviceProxy
 * @property CustomerArtifactPaths|null $customerArtifactPaths
 * @property Radios|null $radios
 * @property list<string>|null $auxiliaryApps
 * @property 'METERED'|'UNMETERED'|null $billingMethod
 */
class ScheduleRunConfiguration extends Shape
{
    /**
     * @param array{
     *     extraDataPackageArn?: string|null,
     *     networkProfileArn?: string|null,
     *     locale?: string|null,
     *     location?: Location|null,
     *     vpceConfigurationArns?: list<string>|null,
     *     deviceProxy?: DeviceProxy|null,
     *     customerArtifactPaths?: CustomerArtifactPaths|null,
     *     radios?: Radios|null,
     *     auxiliaryApps?: list<string>|null,
     *     billingMethod?: 'METERED'|'UNMETERED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
