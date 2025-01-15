<?php

namespace Sunaoka\Aws\Structures\signer\GetSigningPlatform;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $platformId
 * @property string|null $displayName
 * @property string|null $partner
 * @property string|null $target
 * @property 'AWSIoT'|null $category
 * @property Shapes\SigningConfiguration|null $signingConfiguration
 * @property Shapes\SigningImageFormat|null $signingImageFormat
 * @property int|null $maxSizeInMB
 * @property bool|null $revocationSupported
 */
class GetSigningPlatformResponse extends Response
{
}
