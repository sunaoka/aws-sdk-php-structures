<?php

namespace Sunaoka\Aws\Structures\ACMPCA\IssueCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ApiPassthrough|null $ApiPassthrough
 * @property string $CertificateAuthorityArn
 * @property string|resource|\Psr\Http\Message\StreamInterface $Csr
 * @property 'SHA256WITHECDSA'|'SHA384WITHECDSA'|'SHA512WITHECDSA'|'SHA256WITHRSA'|'SHA384WITHRSA'|'SHA512WITHRSA'|'SM3WITHSM2' $SigningAlgorithm
 * @property string|null $TemplateArn
 * @property Shapes\Validity $Validity
 * @property Shapes\Validity|null $ValidityNotBefore
 * @property string|null $IdempotencyToken
 */
class IssueCertificateRequest extends Request
{
    /**
     * @param array{
     *     ApiPassthrough?: Shapes\ApiPassthrough|null,
     *     CertificateAuthorityArn: string,
     *     Csr: string|resource|\Psr\Http\Message\StreamInterface,
     *     SigningAlgorithm: 'SHA256WITHECDSA'|'SHA384WITHECDSA'|'SHA512WITHECDSA'|'SHA256WITHRSA'|'SHA384WITHRSA'|'SHA512WITHRSA'|'SM3WITHSM2',
     *     TemplateArn?: string|null,
     *     Validity: Shapes\Validity,
     *     ValidityNotBefore?: Shapes\Validity|null,
     *     IdempotencyToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
