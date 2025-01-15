<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeHsmClientCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HsmClientCertificateIdentifier
 * @property string|null $HsmClientCertificatePublicKey
 * @property list<Tag>|null $Tags
 */
class HsmClientCertificate extends Shape
{
    /**
     * @param array{
     *     HsmClientCertificateIdentifier?: string|null,
     *     HsmClientCertificatePublicKey?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
