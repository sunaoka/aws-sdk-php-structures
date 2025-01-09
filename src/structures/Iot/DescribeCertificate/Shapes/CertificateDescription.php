<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateArn
 * @property string $certificateId
 * @property string $caCertificateId
 * @property 'ACTIVE'|'INACTIVE'|'REVOKED'|'PENDING_TRANSFER'|'REGISTER_INACTIVE'|'PENDING_ACTIVATION' $status
 * @property string $certificatePem
 * @property string $ownedBy
 * @property string $previousOwnedBy
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 * @property int $customerVersion
 * @property TransferData $transferData
 * @property string $generationId
 * @property CertificateValidity $validity
 * @property 'DEFAULT'|'SNI_ONLY' $certificateMode
 */
class CertificateDescription extends Shape
{
    /**
     * @param array{
     *     certificateArn?: string,
     *     certificateId?: string,
     *     caCertificateId?: string,
     *     status?: 'ACTIVE'|'INACTIVE'|'REVOKED'|'PENDING_TRANSFER'|'REGISTER_INACTIVE'|'PENDING_ACTIVATION',
     *     certificatePem?: string,
     *     ownedBy?: string,
     *     previousOwnedBy?: string,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult,
     *     customerVersion?: int,
     *     transferData?: TransferData,
     *     generationId?: string,
     *     validity?: CertificateValidity,
     *     certificateMode?: 'DEFAULT'|'SNI_ONLY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
