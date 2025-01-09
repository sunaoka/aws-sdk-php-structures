<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE' $bootMode
 * @property bool $copyPrivateIp
 * @property bool $copyTags
 * @property bool $enableMapAutoTagging
 * @property 'STOPPED'|'STARTED' $launchDisposition
 * @property Shapes\Licensing $licensing
 * @property string $mapAutoTaggingMpeID
 * @property string $name
 * @property Shapes\PostLaunchActions $postLaunchActions
 * @property string $sourceServerID
 * @property 'NONE'|'BASIC' $targetInstanceTypeRightSizingMethod
 */
class UpdateLaunchConfigurationRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     bootMode?: 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE',
     *     copyPrivateIp?: bool,
     *     copyTags?: bool,
     *     enableMapAutoTagging?: bool,
     *     launchDisposition?: 'STOPPED'|'STARTED',
     *     licensing?: Shapes\Licensing,
     *     mapAutoTaggingMpeID?: string,
     *     name?: string,
     *     postLaunchActions?: Shapes\PostLaunchActions,
     *     sourceServerID: string,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
