<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationProviderArn
 * @property DisplayData|null $DisplayData
 * @property 'SAML'|'OAUTH'|null $FederationProtocol
 * @property ResourceServerConfig|null $ResourceServerConfig
 */
class ApplicationProvider extends Shape
{
    /**
     * @param array{
     *     ApplicationProviderArn: string,
     *     DisplayData?: DisplayData|null,
     *     FederationProtocol?: 'SAML'|'OAUTH'|null,
     *     ResourceServerConfig?: ResourceServerConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
