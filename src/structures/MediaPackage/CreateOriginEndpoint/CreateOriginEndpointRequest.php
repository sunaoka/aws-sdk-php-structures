<?php

namespace Sunaoka\Aws\Structures\MediaPackage\CreateOriginEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Authorization|null $Authorization
 * @property string $ChannelId
 * @property Shapes\CmafPackageCreateOrUpdateParameters|null $CmafPackage
 * @property Shapes\DashPackage|null $DashPackage
 * @property string|null $Description
 * @property Shapes\HlsPackage|null $HlsPackage
 * @property string $Id
 * @property string|null $ManifestName
 * @property Shapes\MssPackage|null $MssPackage
 * @property 'ALLOW'|'DENY'|null $Origination
 * @property int|null $StartoverWindowSeconds
 * @property array<string, string>|null $Tags
 * @property int|null $TimeDelaySeconds
 * @property list<string>|null $Whitelist
 */
class CreateOriginEndpointRequest extends Request
{
    /**
     * @param array{
     *     Authorization?: Shapes\Authorization|null,
     *     ChannelId: string,
     *     CmafPackage?: Shapes\CmafPackageCreateOrUpdateParameters|null,
     *     DashPackage?: Shapes\DashPackage|null,
     *     Description?: string|null,
     *     HlsPackage?: Shapes\HlsPackage|null,
     *     Id: string,
     *     ManifestName?: string|null,
     *     MssPackage?: Shapes\MssPackage|null,
     *     Origination?: 'ALLOW'|'DENY'|null,
     *     StartoverWindowSeconds?: int|null,
     *     Tags?: array<string, string>|null,
     *     TimeDelaySeconds?: int|null,
     *     Whitelist?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
