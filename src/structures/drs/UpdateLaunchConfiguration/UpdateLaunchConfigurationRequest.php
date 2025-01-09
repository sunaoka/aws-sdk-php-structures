<?php

namespace Sunaoka\Aws\Structures\drs\UpdateLaunchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $copyPrivateIp
 * @property bool $copyTags
 * @property 'STOPPED'|'STARTED' $launchDisposition
 * @property Shapes\LaunchIntoInstanceProperties $launchIntoInstanceProperties
 * @property Shapes\Licensing $licensing
 * @property string $name
 * @property bool $postLaunchEnabled
 * @property string $sourceServerID
 * @property 'NONE'|'BASIC'|'IN_AWS' $targetInstanceTypeRightSizingMethod
 */
class UpdateLaunchConfigurationRequest extends Request
{
    /**
     * @param array{
     *     copyPrivateIp?: bool,
     *     copyTags?: bool,
     *     launchDisposition?: 'STOPPED'|'STARTED',
     *     launchIntoInstanceProperties?: Shapes\LaunchIntoInstanceProperties,
     *     licensing?: Shapes\Licensing,
     *     name?: string,
     *     postLaunchEnabled?: bool,
     *     sourceServerID: string,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'|'IN_AWS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
