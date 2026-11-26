<?php

namespace Sunaoka\Aws\Structures\ELBProxy\ListCertificateAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateArn
 * @property CertificateAssociationStatus $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class CertificateAssociation extends Shape
{
    /**
     * @param array{
     *     certificateArn: string,
     *     status: CertificateAssociationStatus,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
