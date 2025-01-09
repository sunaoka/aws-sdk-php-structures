<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateDomainName;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApiMappingSelectionExpression
 * @property string $DomainName
 * @property list<Shapes\DomainNameConfiguration> $DomainNameConfigurations
 * @property Shapes\MutualTlsAuthentication $MutualTlsAuthentication
 * @property array<string, string> $Tags
 */
class CreateDomainNameResponse extends Response
{
}
