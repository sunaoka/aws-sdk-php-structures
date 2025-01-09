<?php

namespace Sunaoka\Aws\Structures\Acm\RequestCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property 'EMAIL'|'DNS' $ValidationMethod
 * @property list<string> $SubjectAlternativeNames
 * @property string $IdempotencyToken
 * @property list<Shapes\DomainValidationOption> $DomainValidationOptions
 * @property Shapes\CertificateOptions $Options
 * @property string $CertificateAuthorityArn
 * @property list<Shapes\Tag> $Tags
 * @property 'RSA_1024'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1'|'EC_secp521r1' $KeyAlgorithm
 */
class RequestCertificateRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ValidationMethod?: 'EMAIL'|'DNS',
     *     SubjectAlternativeNames?: list<string>,
     *     IdempotencyToken?: string,
     *     DomainValidationOptions?: list<Shapes\DomainValidationOption>,
     *     Options?: Shapes\CertificateOptions,
     *     CertificateAuthorityArn?: string,
     *     Tags?: list<Shapes\Tag>,
     *     KeyAlgorithm?: 'RSA_1024'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1'|'EC_secp521r1'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
