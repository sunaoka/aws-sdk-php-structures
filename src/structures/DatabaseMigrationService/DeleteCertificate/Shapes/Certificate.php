<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateIdentifier
 * @property \Aws\Api\DateTimeResult $CertificateCreationDate
 * @property string $CertificatePem
 * @property \Psr\Http\Message\StreamInterface $CertificateWallet
 * @property string $CertificateArn
 * @property string $CertificateOwner
 * @property \Aws\Api\DateTimeResult $ValidFromDate
 * @property \Aws\Api\DateTimeResult $ValidToDate
 * @property string $SigningAlgorithm
 * @property int $KeyLength
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     CertificateIdentifier?: string,
     *     CertificateCreationDate?: \Aws\Api\DateTimeResult,
     *     CertificatePem?: string,
     *     CertificateWallet?: \Psr\Http\Message\StreamInterface,
     *     CertificateArn?: string,
     *     CertificateOwner?: string,
     *     ValidFromDate?: \Aws\Api\DateTimeResult,
     *     ValidToDate?: \Aws\Api\DateTimeResult,
     *     SigningAlgorithm?: string,
     *     KeyLength?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
