<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateDomainName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property list<Shapes\DomainNameConfiguration>|null $DomainNameConfigurations
 * @property Shapes\MutualTlsAuthenticationInput|null $MutualTlsAuthentication
 * @property 'API_MAPPING_ONLY'|'ROUTING_RULE_ONLY'|'ROUTING_RULE_THEN_API_MAPPING'|null $RoutingMode
 */
class UpdateDomainNameRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     DomainNameConfigurations?: list<Shapes\DomainNameConfiguration>|null,
     *     MutualTlsAuthentication?: Shapes\MutualTlsAuthenticationInput|null,
     *     RoutingMode?: 'API_MAPPING_ONLY'|'ROUTING_RULE_ONLY'|'ROUTING_RULE_THEN_API_MAPPING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
