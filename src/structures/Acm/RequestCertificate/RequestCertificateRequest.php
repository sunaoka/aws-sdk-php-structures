<?php

namespace Sunaoka\Aws\Structures\Acm\RequestCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property 'EMAIL'|'DNS'|'HTTP'|null $ValidationMethod
 * @property list<string>|null $SubjectAlternativeNames
 * @property string|null $IdempotencyToken
 * @property list<Shapes\DomainValidationOption>|null $DomainValidationOptions
 * @property Shapes\CertificateOptions|null $Options
 * @property string|null $CertificateAuthorityArn
 * @property list<Shapes\Tag>|null $Tags
 * @property 'RSA_1024'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1'|'EC_secp521r1'|null $KeyAlgorithm
 * @property 'CLOUDFRONT'|null $ManagedBy
 * @property 'CLIENT_AND_SERVER_AUTH'|'CLIENT_AUTH_ONLY'|null $CertificateUsage
 * @property 'N2_AMAZON_MANAGED'|'N2_SFG2_AMAZON_MANAGED'|null $RootHierarchyType
 */
class RequestCertificateRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ValidationMethod?: 'EMAIL'|'DNS'|'HTTP'|null,
     *     SubjectAlternativeNames?: list<string>|null,
     *     IdempotencyToken?: string|null,
     *     DomainValidationOptions?: list<Shapes\DomainValidationOption>|null,
     *     Options?: Shapes\CertificateOptions|null,
     *     CertificateAuthorityArn?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     KeyAlgorithm?: 'RSA_1024'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'EC_prime256v1'|'EC_secp384r1'|'EC_secp521r1'|null,
     *     ManagedBy?: 'CLOUDFRONT'|null,
     *     CertificateUsage?: 'CLIENT_AND_SERVER_AUTH'|'CLIENT_AUTH_ONLY'|null,
     *     RootHierarchyType?: 'N2_AMAZON_MANAGED'|'N2_SFG2_AMAZON_MANAGED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
