<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeApplicationProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationProviderArn
 * @property Shapes\DisplayData|null $DisplayData
 * @property 'SAML'|'OAUTH'|null $FederationProtocol
 * @property Shapes\ResourceServerConfig|null $ResourceServerConfig
 */
class DescribeApplicationProviderResponse extends Response
{
}
