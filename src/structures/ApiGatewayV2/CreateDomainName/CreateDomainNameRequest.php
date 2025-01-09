<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateDomainName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property list<Shapes\DomainNameConfiguration> $DomainNameConfigurations
 * @property Shapes\MutualTlsAuthenticationInput $MutualTlsAuthentication
 * @property array<string, string> $Tags
 */
class CreateDomainNameRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     DomainNameConfigurations?: list<Shapes\DomainNameConfiguration>,
     *     MutualTlsAuthentication?: Shapes\MutualTlsAuthenticationInput,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
