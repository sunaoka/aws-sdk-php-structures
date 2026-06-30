<?php

namespace Sunaoka\Aws\Structures\Acm\CreateAcmeEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $IdempotencyToken
 * @property 'PRE_APPROVED' $AuthorizationBehavior
 * @property 'REQUIRED'|'NOT_REQUIRED'|null $Contact
 * @property Shapes\CertificateAuthority $CertificateAuthority
 * @property list<Shapes\Tag>|null $Tags
 * @property list<Shapes\Tag>|null $CertificateTags
 */
class CreateAcmeEndpointRequest extends Request
{
    /**
     * @param array{
     *     IdempotencyToken?: string|null,
     *     AuthorizationBehavior: 'PRE_APPROVED',
     *     Contact?: 'REQUIRED'|'NOT_REQUIRED'|null,
     *     CertificateAuthority: Shapes\CertificateAuthority,
     *     Tags?: list<Shapes\Tag>|null,
     *     CertificateTags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
