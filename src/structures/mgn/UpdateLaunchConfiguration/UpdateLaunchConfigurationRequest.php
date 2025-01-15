<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null $bootMode
 * @property bool|null $copyPrivateIp
 * @property bool|null $copyTags
 * @property bool|null $enableMapAutoTagging
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property Shapes\Licensing|null $licensing
 * @property string|null $mapAutoTaggingMpeID
 * @property string|null $name
 * @property Shapes\PostLaunchActions|null $postLaunchActions
 * @property string $sourceServerID
 * @property 'NONE'|'BASIC'|null $targetInstanceTypeRightSizingMethod
 */
class UpdateLaunchConfigurationRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     bootMode?: 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null,
     *     copyPrivateIp?: bool|null,
     *     copyTags?: bool|null,
     *     enableMapAutoTagging?: bool|null,
     *     launchDisposition?: 'STOPPED'|'STARTED'|null,
     *     licensing?: Shapes\Licensing|null,
     *     mapAutoTaggingMpeID?: string|null,
     *     name?: string|null,
     *     postLaunchActions?: Shapes\PostLaunchActions|null,
     *     sourceServerID: string,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
