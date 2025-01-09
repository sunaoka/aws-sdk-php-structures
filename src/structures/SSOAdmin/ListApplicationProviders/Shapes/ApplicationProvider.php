<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationProviderArn
 * @property DisplayData $DisplayData
 * @property 'SAML'|'OAUTH' $FederationProtocol
 * @property ResourceServerConfig $ResourceServerConfig
 */
class ApplicationProvider extends Shape
{
    /**
     * @param array{
     *     ApplicationProviderArn: string,
     *     DisplayData?: DisplayData,
     *     FederationProtocol?: 'SAML'|'OAUTH',
     *     ResourceServerConfig?: ResourceServerConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
