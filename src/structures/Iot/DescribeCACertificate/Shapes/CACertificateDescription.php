<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCACertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateArn
 * @property string $certificateId
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property string $certificatePem
 * @property string $ownedBy
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property 'ENABLE'|'DISABLE' $autoRegistrationStatus
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 * @property int $customerVersion
 * @property string $generationId
 * @property CertificateValidity $validity
 * @property 'DEFAULT'|'SNI_ONLY' $certificateMode
 */
class CACertificateDescription extends Shape
{
    /**
     * @param array{
     *     certificateArn?: string,
     *     certificateId?: string,
     *     status?: 'ACTIVE'|'INACTIVE',
     *     certificatePem?: string,
     *     ownedBy?: string,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     autoRegistrationStatus?: 'ENABLE'|'DISABLE',
     *     lastModifiedDate?: \Aws\Api\DateTimeResult,
     *     customerVersion?: int,
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
