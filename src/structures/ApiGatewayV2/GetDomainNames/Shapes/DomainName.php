<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetDomainNames\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApiMappingSelectionExpression
 * @property string $DomainName
 * @property list<DomainNameConfiguration> $DomainNameConfigurations
 * @property MutualTlsAuthentication $MutualTlsAuthentication
 * @property array<string, string> $Tags
 */
class DomainName extends Shape
{
    /**
     * @param array{
     *     ApiMappingSelectionExpression?: string,
     *     DomainName: string,
     *     DomainNameConfigurations?: list<DomainNameConfiguration>,
     *     MutualTlsAuthentication?: MutualTlsAuthentication,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
