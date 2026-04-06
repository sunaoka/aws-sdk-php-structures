<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateArn
 * @property string $DomainName
 */
class ACMManaged extends Shape
{
    /**
     * @param array{
     *     CertificateArn: string,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
