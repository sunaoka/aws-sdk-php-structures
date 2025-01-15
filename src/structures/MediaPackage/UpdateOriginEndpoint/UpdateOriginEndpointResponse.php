<?php

namespace Sunaoka\Aws\Structures\MediaPackage\UpdateOriginEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property Shapes\Authorization|null $Authorization
 * @property string|null $ChannelId
 * @property Shapes\CmafPackage|null $CmafPackage
 * @property string|null $CreatedAt
 * @property Shapes\DashPackage|null $DashPackage
 * @property string|null $Description
 * @property Shapes\HlsPackage|null $HlsPackage
 * @property string|null $Id
 * @property string|null $ManifestName
 * @property Shapes\MssPackage|null $MssPackage
 * @property 'ALLOW'|'DENY'|null $Origination
 * @property int|null $StartoverWindowSeconds
 * @property array<string, string>|null $Tags
 * @property int|null $TimeDelaySeconds
 * @property string|null $Url
 * @property list<string>|null $Whitelist
 */
class UpdateOriginEndpointResponse extends Response
{
}
