<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetDomainNames\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApiMappingSelectionExpression
 * @property string $DomainName
 * @property string|null $DomainNameArn
 * @property list<DomainNameConfiguration>|null $DomainNameConfigurations
 * @property MutualTlsAuthentication|null $MutualTlsAuthentication
 * @property 'API_MAPPING_ONLY'|'ROUTING_RULE_ONLY'|'ROUTING_RULE_THEN_API_MAPPING'|null $RoutingMode
 * @property array<string, string>|null $Tags
 */
class DomainName extends Shape
{
    /**
     * @param array{
     *     ApiMappingSelectionExpression?: string|null,
     *     DomainName: string,
     *     DomainNameArn?: string|null,
     *     DomainNameConfigurations?: list<DomainNameConfiguration>|null,
     *     MutualTlsAuthentication?: MutualTlsAuthentication|null,
     *     RoutingMode?: 'API_MAPPING_ONLY'|'ROUTING_RULE_ONLY'|'ROUTING_RULE_THEN_API_MAPPING'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
