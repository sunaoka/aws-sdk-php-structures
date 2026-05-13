<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListCertificateAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $acmCertificateArn
 * @property 'PENDING_ASSOCIATION'|'ASSOCIATED'|'PENDING_DISASSOCIATION'|'DISASSOCIATED'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult|null $associatedAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class CertificateAssociationSummary extends Shape
{
    /**
     * @param array{
     *     acmCertificateArn: string,
     *     status: 'PENDING_ASSOCIATION'|'ASSOCIATED'|'PENDING_DISASSOCIATION'|'DISASSOCIATED'|'FAILED',
     *     associatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
