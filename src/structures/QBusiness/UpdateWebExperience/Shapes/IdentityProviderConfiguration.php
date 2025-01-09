<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateWebExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SamlProviderConfiguration $samlConfiguration
 * @property OpenIDConnectProviderConfiguration $openIDConnectConfiguration
 */
class IdentityProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     samlConfiguration?: SamlProviderConfiguration,
     *     openIDConnectConfiguration?: OpenIDConnectProviderConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
