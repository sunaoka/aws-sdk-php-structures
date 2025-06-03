<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateDomainName;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApiMappingSelectionExpression
 * @property string|null $DomainName
 * @property string|null $DomainNameArn
 * @property list<Shapes\DomainNameConfiguration>|null $DomainNameConfigurations
 * @property Shapes\MutualTlsAuthentication|null $MutualTlsAuthentication
 * @property 'API_MAPPING_ONLY'|'ROUTING_RULE_ONLY'|'ROUTING_RULE_THEN_API_MAPPING'|null $RoutingMode
 * @property array<string, string>|null $Tags
 */
class UpdateDomainNameResponse extends Response
{
}
