<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateWebExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SamlProviderConfiguration|null $samlConfiguration
 * @property OpenIDConnectProviderConfiguration|null $openIDConnectConfiguration
 */
class IdentityProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     samlConfiguration?: SamlProviderConfiguration|null,
     *     openIDConnectConfiguration?: OpenIDConnectProviderConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
