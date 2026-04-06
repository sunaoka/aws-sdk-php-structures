<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetPortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateArn
 * @property string|null $DomainName
 * @property string $PortalDefaultDomainName
 * @property string $PortalDomainHostedZoneId
 */
class EndpointConfigurationResponse extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string|null,
     *     DomainName?: string|null,
     *     PortalDefaultDomainName: string,
     *     PortalDomainHostedZoneId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
