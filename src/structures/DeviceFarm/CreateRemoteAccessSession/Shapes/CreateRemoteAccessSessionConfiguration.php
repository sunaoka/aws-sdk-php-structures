<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateRemoteAccessSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $auxiliaryApps
 * @property 'METERED'|'UNMETERED'|null $billingMethod
 * @property list<string>|null $vpceConfigurationArns
 * @property DeviceProxy|null $deviceProxy
 * @property array<string, string>|null $parameters
 */
class CreateRemoteAccessSessionConfiguration extends Shape
{
    /**
     * @param array{
     *     auxiliaryApps?: list<string>|null,
     *     billingMethod?: 'METERED'|'UNMETERED'|null,
     *     vpceConfigurationArns?: list<string>|null,
     *     deviceProxy?: DeviceProxy|null,
     *     parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
