<?php

namespace Sunaoka\Aws\Structures\MediaPackage\DescribeOriginEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property Shapes\Authorization $Authorization
 * @property string $ChannelId
 * @property Shapes\CmafPackage $CmafPackage
 * @property string $CreatedAt
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
 * @property string $Url
 * @property list<string> $Whitelist
 */
class DescribeOriginEndpointResponse extends Response
{
}
