<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationProviderArn
 * @property 'SAML'|'OAUTH'|null $FederationProtocol
 * @property DisplayData|null $DisplayData
 * @property ResourceServerConfig|null $ResourceServerConfig
 */
class ApplicationProvider extends Shape
{
    /**
     * @param array{
     *     ApplicationProviderArn: string,
     *     FederationProtocol?: 'SAML'|'OAUTH'|null,
     *     DisplayData?: DisplayData|null,
     *     ResourceServerConfig?: ResourceServerConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
