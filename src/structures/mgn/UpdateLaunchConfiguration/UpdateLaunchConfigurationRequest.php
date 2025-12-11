<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 * @property string|null $name
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property 'NONE'|'BASIC'|null $targetInstanceTypeRightSizingMethod
 * @property bool|null $copyPrivateIp
 * @property bool|null $copyTags
 * @property Shapes\Licensing|null $licensing
 * @property 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null $bootMode
 * @property Shapes\PostLaunchActions|null $postLaunchActions
 * @property bool|null $enableMapAutoTagging
 * @property string|null $mapAutoTaggingMpeID
 * @property string|null $accountID
 */
class UpdateLaunchConfigurationRequest extends Request
{
    /**
     * @param array{
     *     sourceServerID: string,
     *     name?: string|null,
     *     launchDisposition?: 'STOPPED'|'STARTED'|null,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'|null,
     *     copyPrivateIp?: bool|null,
     *     copyTags?: bool|null,
     *     licensing?: Shapes\Licensing|null,
     *     bootMode?: 'LEGACY_BIOS'|'UEFI'|'USE_SOURCE'|null,
     *     postLaunchActions?: Shapes\PostLaunchActions|null,
     *     enableMapAutoTagging?: bool|null,
     *     mapAutoTaggingMpeID?: string|null,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
