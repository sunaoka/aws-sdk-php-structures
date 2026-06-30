<?php

namespace Sunaoka\Aws\Structures\Acm\UpdateAcmeEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcmeEndpointArn
 * @property 'PRE_APPROVED'|null $AuthorizationBehavior
 * @property 'REQUIRED'|'NOT_REQUIRED'|null $Contact
 * @property Shapes\CertificateAuthority|null $CertificateAuthority
 */
class UpdateAcmeEndpointRequest extends Request
{
    /**
     * @param array{
     *     AcmeEndpointArn: string,
     *     AuthorizationBehavior?: 'PRE_APPROVED'|null,
     *     Contact?: 'REQUIRED'|'NOT_REQUIRED'|null,
     *     CertificateAuthority?: Shapes\CertificateAuthority|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
