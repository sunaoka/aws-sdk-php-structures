<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListOriginEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property Authorization|null $Authorization
 * @property string|null $ChannelId
 * @property CmafPackage|null $CmafPackage
 * @property string|null $CreatedAt
 * @property DashPackage|null $DashPackage
 * @property string|null $Description
 * @property HlsPackage|null $HlsPackage
 * @property string|null $Id
 * @property string|null $ManifestName
 * @property MssPackage|null $MssPackage
 * @property 'ALLOW'|'DENY'|null $Origination
 * @property int|null $StartoverWindowSeconds
 * @property array<string, string>|null $Tags
 * @property int|null $TimeDelaySeconds
 * @property string|null $Url
 * @property list<string>|null $Whitelist
 */
class OriginEndpoint extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Authorization?: Authorization|null,
     *     ChannelId?: string|null,
     *     CmafPackage?: CmafPackage|null,
     *     CreatedAt?: string|null,
     *     DashPackage?: DashPackage|null,
     *     Description?: string|null,
     *     HlsPackage?: HlsPackage|null,
     *     Id?: string|null,
     *     ManifestName?: string|null,
     *     MssPackage?: MssPackage|null,
     *     Origination?: 'ALLOW'|'DENY'|null,
     *     StartoverWindowSeconds?: int|null,
     *     Tags?: array<string, string>|null,
     *     TimeDelaySeconds?: int|null,
     *     Url?: string|null,
     *     Whitelist?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
