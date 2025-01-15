<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningPlatforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $platformId
 * @property string|null $displayName
 * @property string|null $partner
 * @property string|null $target
 * @property 'AWSIoT'|null $category
 * @property SigningConfiguration|null $signingConfiguration
 * @property SigningImageFormat|null $signingImageFormat
 * @property int|null $maxSizeInMB
 * @property bool|null $revocationSupported
 */
class SigningPlatform extends Shape
{
    /**
     * @param array{
     *     platformId?: string|null,
     *     displayName?: string|null,
     *     partner?: string|null,
     *     target?: string|null,
     *     category?: 'AWSIoT'|null,
     *     signingConfiguration?: SigningConfiguration|null,
     *     signingImageFormat?: SigningImageFormat|null,
     *     maxSizeInMB?: int|null,
     *     revocationSupported?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
