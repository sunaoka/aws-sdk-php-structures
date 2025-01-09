<?php

namespace Sunaoka\Aws\Structures\signer\DescribeSigningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SigningConfigurationOverrides $signingConfiguration
 * @property 'JSON'|'JSONEmbedded'|'JSONDetached' $signingImageFormat
 */
class SigningPlatformOverrides extends Shape
{
    /**
     * @param array{
     *     signingConfiguration?: SigningConfigurationOverrides,
     *     signingImageFormat?: 'JSON'|'JSONEmbedded'|'JSONDetached'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
