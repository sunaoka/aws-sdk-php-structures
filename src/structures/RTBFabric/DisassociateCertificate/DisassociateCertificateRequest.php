<?php

namespace Sunaoka\Aws\Structures\RTBFabric\DisassociateCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $acmCertificateArn
 */
class DisassociateCertificateRequest extends Request
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
