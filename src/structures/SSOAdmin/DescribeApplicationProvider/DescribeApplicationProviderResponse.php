<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeApplicationProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationProviderArn
 * @property Shapes\DisplayData $DisplayData
 * @property 'SAML'|'OAUTH' $FederationProtocol
 * @property Shapes\ResourceServerConfig $ResourceServerConfig
 */
class DescribeApplicationProviderResponse extends Response
{
}
