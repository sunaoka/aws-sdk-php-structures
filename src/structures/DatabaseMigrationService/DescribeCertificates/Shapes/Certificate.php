<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateIdentifier
 * @property \Aws\Api\DateTimeResult|null $CertificateCreationDate
 * @property string|null $CertificatePem
 * @property \Psr\Http\Message\StreamInterface|null $CertificateWallet
 * @property string|null $CertificateArn
 * @property string|null $CertificateOwner
 * @property \Aws\Api\DateTimeResult|null $ValidFromDate
 * @property \Aws\Api\DateTimeResult|null $ValidToDate
 * @property string|null $SigningAlgorithm
 * @property int|null $KeyLength
 * @property string|null $KmsKeyId
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     CertificateIdentifier?: string|null,
     *     CertificateCreationDate?: \Aws\Api\DateTimeResult|null,
     *     CertificatePem?: string|null,
     *     CertificateWallet?: \Psr\Http\Message\StreamInterface|null,
     *     CertificateArn?: string|null,
     *     CertificateOwner?: string|null,
     *     ValidFromDate?: \Aws\Api\DateTimeResult|null,
     *     ValidToDate?: \Aws\Api\DateTimeResult|null,
     *     SigningAlgorithm?: string|null,
     *     KeyLength?: int|null,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
