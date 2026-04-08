<?php

namespace Sunaoka\Aws\Structures\drs\UpdateLaunchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 * @property string|null $name
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property 'NONE'|'BASIC'|'IN_AWS'|null $targetInstanceTypeRightSizingMethod
 * @property bool|null $copyPrivateIp
 * @property bool|null $copyTags
 * @property Shapes\Licensing|null $licensing
 * @property bool|null $postLaunchEnabled
 * @property Shapes\LaunchIntoInstanceProperties|null $launchIntoInstanceProperties
 */
class UpdateLaunchConfigurationRequest extends Request
{
    /**
     * @param array{
     *     sourceServerID: string,
     *     name?: string|null,
     *     launchDisposition?: 'STOPPED'|'STARTED'|null,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'|'IN_AWS'|null,
     *     copyPrivateIp?: bool|null,
     *     copyTags?: bool|null,
     *     licensing?: Shapes\Licensing|null,
     *     postLaunchEnabled?: bool|null,
     *     launchIntoInstanceProperties?: Shapes\LaunchIntoInstanceProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
