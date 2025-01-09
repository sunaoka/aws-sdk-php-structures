<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDevicePoolCompatibility\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $extraDataPackageArn
 * @property string $networkProfileArn
 * @property string $locale
 * @property Location $location
 * @property list<string> $vpceConfigurationArns
 * @property CustomerArtifactPaths $customerArtifactPaths
 * @property Radios $radios
 * @property list<string> $auxiliaryApps
 * @property 'METERED'|'UNMETERED' $billingMethod
 */
class ScheduleRunConfiguration extends Shape
{
    /**
     * @param array{
     *     extraDataPackageArn?: string,
     *     networkProfileArn?: string,
     *     locale?: string,
     *     location?: Location,
     *     vpceConfigurationArns?: list<string>,
     *     customerArtifactPaths?: CustomerArtifactPaths,
     *     radios?: Radios,
     *     auxiliaryApps?: list<string>,
     *     billingMethod?: 'METERED'|'UNMETERED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
