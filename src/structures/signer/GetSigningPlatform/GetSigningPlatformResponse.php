<?php

namespace Sunaoka\Aws\Structures\signer\GetSigningPlatform;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $platformId
 * @property string $displayName
 * @property string $partner
 * @property string $target
 * @property 'AWSIoT' $category
 * @property Shapes\SigningConfiguration $signingConfiguration
 * @property Shapes\SigningImageFormat $signingImageFormat
 * @property int $maxSizeInMB
 * @property bool $revocationSupported
 */
class GetSigningPlatformResponse extends Response
{
}
