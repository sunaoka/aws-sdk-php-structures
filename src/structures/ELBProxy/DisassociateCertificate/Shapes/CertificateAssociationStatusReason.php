<?php

namespace Sunaoka\Aws\Structures\ELBProxy\DisassociateCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property string|null $message
 */
class CertificateAssociationStatusReason extends Shape
{
    /**
     * @param array{
     *     code: string,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
