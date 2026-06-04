<?php

namespace Sunaoka\Aws\Structures\Emr\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateArn
 * @property string|null $CertificateData
 */
class CertificateAuthority extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string|null,
     *     CertificateData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
