<?php

namespace Sunaoka\Aws\Structures\MediaPackage\UpdateOriginEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Authorization $Authorization
 * @property Shapes\CmafPackageCreateOrUpdateParameters $CmafPackage
 * @property Shapes\DashPackage $DashPackage
 * @property string $Description
 * @property Shapes\HlsPackage $HlsPackage
 * @property string $Id
 * @property string $ManifestName
 * @property Shapes\MssPackage $MssPackage
 * @property 'ALLOW'|'DENY' $Origination
 * @property int $StartoverWindowSeconds
 * @property int $TimeDelaySeconds
 * @property list<string> $Whitelist
 */
class UpdateOriginEndpointRequest extends Request
{
    /**
     * @param array{
     *     Authorization?: Shapes\Authorization,
     *     CmafPackage?: Shapes\CmafPackageCreateOrUpdateParameters,
     *     DashPackage?: Shapes\DashPackage,
     *     Description?: string,
     *     HlsPackage?: Shapes\HlsPackage,
     *     Id: string,
     *     ManifestName?: string,
     *     MssPackage?: Shapes\MssPackage,
     *     Origination?: 'ALLOW'|'DENY',
     *     StartoverWindowSeconds?: int,
     *     TimeDelaySeconds?: int,
     *     Whitelist?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
