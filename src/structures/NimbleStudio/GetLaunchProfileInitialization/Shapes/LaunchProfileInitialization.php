<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetLaunchProfileInitialization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LaunchProfileInitializationActiveDirectory|null $activeDirectory
 * @property list<string>|null $ec2SecurityGroupIds
 * @property string|null $launchProfileId
 * @property string|null $launchProfileProtocolVersion
 * @property string|null $launchPurpose
 * @property string|null $name
 * @property 'LINUX'|'WINDOWS'|null $platform
 * @property list<LaunchProfileInitializationScript>|null $systemInitializationScripts
 * @property list<LaunchProfileInitializationScript>|null $userInitializationScripts
 */
class LaunchProfileInitialization extends Shape
{
    /**
     * @param array{
     *     activeDirectory?: LaunchProfileInitializationActiveDirectory|null,
     *     ec2SecurityGroupIds?: list<string>|null,
     *     launchProfileId?: string|null,
     *     launchProfileProtocolVersion?: string|null,
     *     launchPurpose?: string|null,
     *     name?: string|null,
     *     platform?: 'LINUX'|'WINDOWS'|null,
     *     systemInitializationScripts?: list<LaunchProfileInitializationScript>|null,
     *     userInitializationScripts?: list<LaunchProfileInitializationScript>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
