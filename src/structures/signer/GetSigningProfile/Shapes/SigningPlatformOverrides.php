<?php

namespace Sunaoka\Aws\Structures\signer\GetSigningProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SigningConfigurationOverrides|null $signingConfiguration
 * @property 'JSON'|'JSONEmbedded'|'JSONDetached'|null $signingImageFormat
 */
class SigningPlatformOverrides extends Shape
{
    /**
     * @param array{
     *     signingConfiguration?: SigningConfigurationOverrides|null,
     *     signingImageFormat?: 'JSON'|'JSONEmbedded'|'JSONDetached'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
