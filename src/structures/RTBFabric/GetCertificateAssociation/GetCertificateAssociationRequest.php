<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetCertificateAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $acmCertificateArn
 */
class GetCertificateAssociationRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     acmCertificateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
