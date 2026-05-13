<?php

namespace Sunaoka\Aws\Structures\RTBFabric\AssociateCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $acmCertificateArn
 * @property string $clientToken
 */
class AssociateCertificateRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     acmCertificateArn: string,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
