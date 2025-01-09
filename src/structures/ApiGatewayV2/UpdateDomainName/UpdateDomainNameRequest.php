<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateDomainName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property list<Shapes\DomainNameConfiguration> $DomainNameConfigurations
 * @property Shapes\MutualTlsAuthenticationInput $MutualTlsAuthentication
 */
class UpdateDomainNameRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     DomainNameConfigurations?: list<Shapes\DomainNameConfiguration>,
     *     MutualTlsAuthentication?: Shapes\MutualTlsAuthenticationInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
