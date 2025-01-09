<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningPlatforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $platformId
 * @property string $displayName
 * @property string $partner
 * @property string $target
 * @property 'AWSIoT' $category
 * @property SigningConfiguration $signingConfiguration
 * @property SigningImageFormat $signingImageFormat
 * @property int $maxSizeInMB
 * @property bool $revocationSupported
 */
class SigningPlatform extends Shape
{
    /**
     * @param array{
     *     platformId?: string,
     *     displayName?: string,
     *     partner?: string,
     *     target?: string,
     *     category?: 'AWSIoT',
     *     signingConfiguration?: SigningConfiguration,
     *     signingImageFormat?: SigningImageFormat,
     *     maxSizeInMB?: int,
     *     revocationSupported?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
