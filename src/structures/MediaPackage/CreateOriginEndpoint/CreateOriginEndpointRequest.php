<?php

namespace Sunaoka\Aws\Structures\MediaPackage\CreateOriginEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Authorization $Authorization
 * @property string $ChannelId
 * @property Shapes\CmafPackageCreateOrUpdateParameters $CmafPackage
 * @property Shapes\DashPackage $DashPackage
 * @property string $Description
 * @property Shapes\HlsPackage $HlsPackage
 * @property string $Id
 * @property string $ManifestName
 * @property Shapes\MssPackage $MssPackage
 * @property 'ALLOW'|'DENY' $Origination
 * @property int $StartoverWindowSeconds
 * @property array<string, string> $Tags
 * @property int $TimeDelaySeconds
 * @property list<string> $Whitelist
 */
class CreateOriginEndpointRequest extends Request
{
    /**
     * @param array{
     *     Authorization?: Shapes\Authorization,
     *     ChannelId: string,
     *     CmafPackage?: Shapes\CmafPackageCreateOrUpdateParameters,
     *     DashPackage?: Shapes\DashPackage,
     *     Description?: string,
     *     HlsPackage?: Shapes\HlsPackage,
     *     Id: string,
     *     ManifestName?: string,
     *     MssPackage?: Shapes\MssPackage,
     *     Origination?: 'ALLOW'|'DENY',
     *     StartoverWindowSeconds?: int,
     *     Tags?: array<string, string>,
     *     TimeDelaySeconds?: int,
     *     Whitelist?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
