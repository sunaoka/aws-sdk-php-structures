<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateTLSInspectionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TLSInspectionConfigurationArn
 * @property string $TLSInspectionConfigurationName
 * @property string $TLSInspectionConfigurationId
 * @property 'ACTIVE'|'DELETING'|'ERROR' $TLSInspectionConfigurationStatus
 * @property string $Description
 * @property list<Tag> $Tags
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property int $NumberOfAssociations
 * @property EncryptionConfiguration $EncryptionConfiguration
 * @property list<TlsCertificateData> $Certificates
 * @property TlsCertificateData $CertificateAuthority
 */
class TLSInspectionConfigurationResponse extends Shape
{
    /**
     * @param array{
     *     TLSInspectionConfigurationArn: string,
     *     TLSInspectionConfigurationName: string,
     *     TLSInspectionConfigurationId: string,
     *     TLSInspectionConfigurationStatus?: 'ACTIVE'|'DELETING'|'ERROR',
     *     Description?: string,
     *     Tags?: list<Tag>,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     NumberOfAssociations?: int,
     *     EncryptionConfiguration?: EncryptionConfiguration,
     *     Certificates?: list<TlsCertificateData>,
     *     CertificateAuthority?: TlsCertificateData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
