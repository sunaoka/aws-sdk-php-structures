<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $certificateArn
 * @property string|null $certificateId
 * @property string|null $caCertificateId
 * @property 'ACTIVE'|'INACTIVE'|'REVOKED'|'PENDING_TRANSFER'|'REGISTER_INACTIVE'|'PENDING_ACTIVATION'|null $status
 * @property string|null $certificatePem
 * @property string|null $ownedBy
 * @property string|null $previousOwnedBy
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 * @property int<1, max>|null $customerVersion
 * @property TransferData|null $transferData
 * @property string|null $generationId
 * @property CertificateValidity|null $validity
 * @property 'DEFAULT'|'SNI_ONLY'|null $certificateMode
 */
class CertificateDescription extends Shape
{
    /**
     * @param array{
     *     certificateArn?: string|null,
     *     certificateId?: string|null,
     *     caCertificateId?: string|null,
     *     status?: 'ACTIVE'|'INACTIVE'|'REVOKED'|'PENDING_TRANSFER'|'REGISTER_INACTIVE'|'PENDING_ACTIVATION'|null,
     *     certificatePem?: string|null,
     *     ownedBy?: string|null,
     *     previousOwnedBy?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     customerVersion?: int<1, max>|null,
     *     transferData?: TransferData|null,
     *     generationId?: string|null,
     *     validity?: CertificateValidity|null,
     *     certificateMode?: 'DEFAULT'|'SNI_ONLY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
