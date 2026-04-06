<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetDomainName;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApiMappingSelectionExpression
 * @property string|null $DomainName
 * @property list<Shapes\DomainNameConfiguration>|null $DomainNameConfigurations
 * @property Shapes\MutualTlsAuthentication|null $MutualTlsAuthentication
 * @property array<string, string>|null $Tags
 */
class GetDomainNameResponse extends Response
{
}
