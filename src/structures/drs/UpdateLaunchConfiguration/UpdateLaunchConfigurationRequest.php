<?php

namespace Sunaoka\Aws\Structures\drs\UpdateLaunchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $copyPrivateIp
 * @property bool|null $copyTags
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property Shapes\LaunchIntoInstanceProperties|null $launchIntoInstanceProperties
 * @property Shapes\Licensing|null $licensing
 * @property string|null $name
 * @property bool|null $postLaunchEnabled
 * @property string $sourceServerID
 * @property 'NONE'|'BASIC'|'IN_AWS'|null $targetInstanceTypeRightSizingMethod
 */
class UpdateLaunchConfigurationRequest extends Request
{
    /**
     * @param array{
     *     copyPrivateIp?: bool|null,
     *     copyTags?: bool|null,
     *     launchDisposition?: 'STOPPED'|'STARTED'|null,
     *     launchIntoInstanceProperties?: Shapes\LaunchIntoInstanceProperties|null,
     *     licensing?: Shapes\Licensing|null,
     *     name?: string|null,
     *     postLaunchEnabled?: bool|null,
     *     sourceServerID: string,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'|'IN_AWS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
