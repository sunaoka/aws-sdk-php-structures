<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateHsmClientCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HsmClientCertificateIdentifier
 * @property string $HsmClientCertificatePublicKey
 * @property list<Tag> $Tags
 */
class HsmClientCertificate extends Shape
{
    /**
     * @param array{
     *     HsmClientCertificateIdentifier?: string,
     *     HsmClientCertificatePublicKey?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
