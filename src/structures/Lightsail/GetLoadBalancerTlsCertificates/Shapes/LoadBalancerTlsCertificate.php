<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancerTlsCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $supportCode
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property ResourceLocation|null $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null $resourceType
 * @property list<Tag>|null $tags
 * @property string|null $loadBalancerName
 * @property bool|null $isAttached
 * @property 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'|'UNKNOWN'|null $status
 * @property string|null $domainName
 * @property list<LoadBalancerTlsCertificateDomainValidationRecord>|null $domainValidationRecords
 * @property 'NO_AVAILABLE_CONTACTS'|'ADDITIONAL_VERIFICATION_REQUIRED'|'DOMAIN_NOT_ALLOWED'|'INVALID_PUBLIC_DOMAIN'|'OTHER'|null $failureReason
 * @property \Aws\Api\DateTimeResult|null $issuedAt
 * @property string|null $issuer
 * @property string|null $keyAlgorithm
 * @property \Aws\Api\DateTimeResult|null $notAfter
 * @property \Aws\Api\DateTimeResult|null $notBefore
 * @property LoadBalancerTlsCertificateRenewalSummary|null $renewalSummary
 * @property 'UNSPECIFIED'|'KEY_COMPROMISE'|'CA_COMPROMISE'|'AFFILIATION_CHANGED'|'SUPERCEDED'|'CESSATION_OF_OPERATION'|'CERTIFICATE_HOLD'|'REMOVE_FROM_CRL'|'PRIVILEGE_WITHDRAWN'|'A_A_COMPROMISE'|null $revocationReason
 * @property \Aws\Api\DateTimeResult|null $revokedAt
 * @property string|null $serial
 * @property string|null $signatureAlgorithm
 * @property string|null $subject
 * @property list<string>|null $subjectAlternativeNames
 */
class LoadBalancerTlsCertificate extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     supportCode?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     location?: ResourceLocation|null,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null,
     *     tags?: list<Tag>|null,
     *     loadBalancerName?: string|null,
     *     isAttached?: bool|null,
     *     status?: 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'|'UNKNOWN'|null,
     *     domainName?: string|null,
     *     domainValidationRecords?: list<LoadBalancerTlsCertificateDomainValidationRecord>|null,
     *     failureReason?: 'NO_AVAILABLE_CONTACTS'|'ADDITIONAL_VERIFICATION_REQUIRED'|'DOMAIN_NOT_ALLOWED'|'INVALID_PUBLIC_DOMAIN'|'OTHER'|null,
     *     issuedAt?: \Aws\Api\DateTimeResult|null,
     *     issuer?: string|null,
     *     keyAlgorithm?: string|null,
     *     notAfter?: \Aws\Api\DateTimeResult|null,
     *     notBefore?: \Aws\Api\DateTimeResult|null,
     *     renewalSummary?: LoadBalancerTlsCertificateRenewalSummary|null,
     *     revocationReason?: 'UNSPECIFIED'|'KEY_COMPROMISE'|'CA_COMPROMISE'|'AFFILIATION_CHANGED'|'SUPERCEDED'|'CESSATION_OF_OPERATION'|'CERTIFICATE_HOLD'|'REMOVE_FROM_CRL'|'PRIVILEGE_WITHDRAWN'|'A_A_COMPROMISE'|null,
     *     revokedAt?: \Aws\Api\DateTimeResult|null,
     *     serial?: string|null,
     *     signatureAlgorithm?: string|null,
     *     subject?: string|null,
     *     subjectAlternativeNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
