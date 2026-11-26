<?php

namespace Sunaoka\Aws\Structures\ELBProxy\DisassociateCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'associate-in-progress'|'active'|'associate-failed'|'disassociate-in-progress'|'disassociated' $code
 * @property list<CertificateAssociationStatusReason> $reasons
 */
class CertificateAssociationStatus extends Shape
{
    /**
     * @param array{
     *     code: 'associate-in-progress'|'active'|'associate-failed'|'disassociate-in-progress'|'disassociated',
     *     reasons: list<CertificateAssociationStatusReason>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
