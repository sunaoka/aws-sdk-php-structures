<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteTLSInspectionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TLSInspectionConfigurationArn
 * @property string $TLSInspectionConfigurationName
 * @property string $TLSInspectionConfigurationId
 * @property 'ACTIVE'|'DELETING'|null $TLSInspectionConfigurationStatus
 * @property string|null $Description
 * @property list<Tag>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property int|null $NumberOfAssociations
 * @property EncryptionConfiguration|null $EncryptionConfiguration
 * @property list<TlsCertificateData>|null $Certificates
 */
class TLSInspectionConfigurationResponse extends Shape
{
    /**
     * @param array{
     *     TLSInspectionConfigurationArn: string,
     *     TLSInspectionConfigurationName: string,
     *     TLSInspectionConfigurationId: string,
     *     TLSInspectionConfigurationStatus?: 'ACTIVE'|'DELETING'|null,
     *     Description?: string|null,
     *     Tags?: list<Tag>|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     NumberOfAssociations?: int|null,
     *     EncryptionConfiguration?: EncryptionConfiguration|null,
     *     Certificates?: list<TlsCertificateData>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
