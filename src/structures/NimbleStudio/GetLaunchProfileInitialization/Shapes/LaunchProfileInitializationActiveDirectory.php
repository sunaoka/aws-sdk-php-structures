<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetLaunchProfileInitialization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ActiveDirectoryComputerAttribute>|null $computerAttributes
 * @property string|null $directoryId
 * @property string|null $directoryName
 * @property list<string>|null $dnsIpAddresses
 * @property string|null $organizationalUnitDistinguishedName
 * @property string|null $studioComponentId
 * @property string|null $studioComponentName
 */
class LaunchProfileInitializationActiveDirectory extends Shape
{
    /**
     * @param array{
     *     computerAttributes?: list<ActiveDirectoryComputerAttribute>|null,
     *     directoryId?: string|null,
     *     directoryName?: string|null,
     *     dnsIpAddresses?: list<string>|null,
     *     organizationalUnitDistinguishedName?: string|null,
     *     studioComponentId?: string|null,
     *     studioComponentName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
