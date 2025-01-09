<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancerTlsCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $supportCode
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property ResourceLocation $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket' $resourceType
 * @property list<Tag> $tags
 * @property string $loadBalancerName
 * @property bool $isAttached
 * @property 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'|'UNKNOWN' $status
 * @property string $domainName
 * @property list<LoadBalancerTlsCertificateDomainValidationRecord> $domainValidationRecords
 * @property 'NO_AVAILABLE_CONTACTS'|'ADDITIONAL_VERIFICATION_REQUIRED'|'DOMAIN_NOT_ALLOWED'|'INVALID_PUBLIC_DOMAIN'|'OTHER' $failureReason
 * @property \Aws\Api\DateTimeResult $issuedAt
 * @property string $issuer
 * @property string $keyAlgorithm
 * @property \Aws\Api\DateTimeResult $notAfter
 * @property \Aws\Api\DateTimeResult $notBefore
 * @property LoadBalancerTlsCertificateRenewalSummary $renewalSummary
 * @property 'UNSPECIFIED'|'KEY_COMPROMISE'|'CA_COMPROMISE'|'AFFILIATION_CHANGED'|'SUPERCEDED'|'CESSATION_OF_OPERATION'|'CERTIFICATE_HOLD'|'REMOVE_FROM_CRL'|'PRIVILEGE_WITHDRAWN'|'A_A_COMPROMISE' $revocationReason
 * @property \Aws\Api\DateTimeResult $revokedAt
 * @property string $serial
 * @property string $signatureAlgorithm
 * @property string $subject
 * @property list<string> $subjectAlternativeNames
 */
class LoadBalancerTlsCertificate extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     supportCode?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     location?: ResourceLocation,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket',
     *     tags?: list<Tag>,
     *     loadBalancerName?: string,
     *     isAttached?: bool,
     *     status?: 'PENDING_VALIDATION'|'ISSUED'|'INACTIVE'|'EXPIRED'|'VALIDATION_TIMED_OUT'|'REVOKED'|'FAILED'|'UNKNOWN',
     *     domainName?: string,
     *     domainValidationRecords?: list<LoadBalancerTlsCertificateDomainValidationRecord>,
     *     failureReason?: 'NO_AVAILABLE_CONTACTS'|'ADDITIONAL_VERIFICATION_REQUIRED'|'DOMAIN_NOT_ALLOWED'|'INVALID_PUBLIC_DOMAIN'|'OTHER',
     *     issuedAt?: \Aws\Api\DateTimeResult,
     *     issuer?: string,
     *     keyAlgorithm?: string,
     *     notAfter?: \Aws\Api\DateTimeResult,
     *     notBefore?: \Aws\Api\DateTimeResult,
     *     renewalSummary?: LoadBalancerTlsCertificateRenewalSummary,
     *     revocationReason?: 'UNSPECIFIED'|'KEY_COMPROMISE'|'CA_COMPROMISE'|'AFFILIATION_CHANGED'|'SUPERCEDED'|'CESSATION_OF_OPERATION'|'CERTIFICATE_HOLD'|'REMOVE_FROM_CRL'|'PRIVILEGE_WITHDRAWN'|'A_A_COMPROMISE',
     *     revokedAt?: \Aws\Api\DateTimeResult,
     *     serial?: string,
     *     signatureAlgorithm?: string,
     *     subject?: string,
     *     subjectAlternativeNames?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
