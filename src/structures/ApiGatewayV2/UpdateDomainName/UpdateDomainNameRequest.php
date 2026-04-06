<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateDomainName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property list<Shapes\DomainNameConfiguration>|null $DomainNameConfigurations
 * @property Shapes\MutualTlsAuthenticationInput|null $MutualTlsAuthentication
 */
class UpdateDomainNameRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     DomainNameConfigurations?: list<Shapes\DomainNameConfiguration>|null,
     *     MutualTlsAuthentication?: Shapes\MutualTlsAuthenticationInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
