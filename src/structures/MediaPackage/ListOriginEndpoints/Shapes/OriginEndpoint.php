<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListOriginEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property Authorization $Authorization
 * @property string $ChannelId
 * @property CmafPackage $CmafPackage
 * @property string $CreatedAt
 * @property DashPackage $DashPackage
 * @property string $Description
 * @property HlsPackage $HlsPackage
 * @property string $Id
 * @property string $ManifestName
 * @property MssPackage $MssPackage
 * @property 'ALLOW'|'DENY' $Origination
 * @property int $StartoverWindowSeconds
 * @property array<string, string> $Tags
 * @property int $TimeDelaySeconds
 * @property string $Url
 * @property list<string> $Whitelist
 */
class OriginEndpoint extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Authorization?: Authorization,
     *     ChannelId?: string,
     *     CmafPackage?: CmafPackage,
     *     CreatedAt?: string,
     *     DashPackage?: DashPackage,
     *     Description?: string,
     *     HlsPackage?: HlsPackage,
     *     Id?: string,
     *     ManifestName?: string,
     *     MssPackage?: MssPackage,
     *     Origination?: 'ALLOW'|'DENY',
     *     StartoverWindowSeconds?: int,
     *     Tags?: array<string, string>,
     *     TimeDelaySeconds?: int,
     *     Url?: string,
     *     Whitelist?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
