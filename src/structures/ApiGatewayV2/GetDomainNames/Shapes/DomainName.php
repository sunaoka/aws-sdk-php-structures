<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetDomainNames\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApiMappingSelectionExpression
 * @property string $DomainName
 * @property list<DomainNameConfiguration>|null $DomainNameConfigurations
 * @property MutualTlsAuthentication|null $MutualTlsAuthentication
 * @property array<string, string>|null $Tags
 */
class DomainName extends Shape
{
    /**
     * @param array{
     *     ApiMappingSelectionExpression?: string|null,
     *     DomainName: string,
     *     DomainNameConfigurations?: list<DomainNameConfiguration>|null,
     *     MutualTlsAuthentication?: MutualTlsAuthentication|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
