<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCACertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $certificateArn
 * @property string|null $certificateId
 * @property 'ACTIVE'|'INACTIVE'|null $status
 * @property string|null $certificatePem
 * @property string|null $ownedBy
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property 'ENABLE'|'DISABLE'|null $autoRegistrationStatus
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 * @property int<1, max>|null $customerVersion
 * @property string|null $generationId
 * @property CertificateValidity|null $validity
 * @property 'DEFAULT'|'SNI_ONLY'|null $certificateMode
 */
class CACertificateDescription extends Shape
{
    /**
     * @param array{
     *     certificateArn?: string|null,
     *     certificateId?: string|null,
     *     status?: 'ACTIVE'|'INACTIVE'|null,
     *     certificatePem?: string|null,
     *     ownedBy?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     autoRegistrationStatus?: 'ENABLE'|'DISABLE'|null,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     customerVersion?: int<1, max>|null,
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
