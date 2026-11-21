<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetPortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainName
 * @property string|null $certificateArn
 * @property string $portalDomainHostedZoneId
 * @property string $portalDefaultDomainName
 */
class EndpointConfigurationResponse extends Shape
{
    /**
     * @param array{
     *     domainName?: string|null,
     *     certificateArn?: string|null,
     *     portalDomainHostedZoneId: string,
     *     portalDefaultDomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
