<?php

namespace Sunaoka\Aws\Structures\ACMPCA\IssueCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ApiPassthrough $ApiPassthrough
 * @property string $CertificateAuthorityArn
 * @property string|resource|\Psr\Http\Message\StreamInterface $Csr
 * @property 'SHA256WITHECDSA'|'SHA384WITHECDSA'|'SHA512WITHECDSA'|'SHA256WITHRSA'|'SHA384WITHRSA'|'SHA512WITHRSA'|'SM3WITHSM2' $SigningAlgorithm
 * @property string $TemplateArn
 * @property Shapes\Validity $Validity
 * @property Shapes\Validity $ValidityNotBefore
 * @property string $IdempotencyToken
 */
class IssueCertificateRequest extends Request
{
    /**
     * @param array{
     *     ApiPassthrough?: Shapes\ApiPassthrough,
     *     CertificateAuthorityArn: string,
     *     Csr: string|resource|\Psr\Http\Message\StreamInterface,
     *     SigningAlgorithm: 'SHA256WITHECDSA'|'SHA384WITHECDSA'|'SHA512WITHECDSA'|'SHA256WITHRSA'|'SHA384WITHRSA'|'SHA512WITHRSA'|'SM3WITHSM2',
     *     TemplateArn?: string,
     *     Validity: Shapes\Validity,
     *     ValidityNotBefore?: Shapes\Validity,
     *     IdempotencyToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
