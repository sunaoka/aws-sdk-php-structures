<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateTLSInspectionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PASS'|'DROP'|'REJECT' $RevokedStatusAction
 * @property 'PASS'|'DROP'|'REJECT' $UnknownStatusAction
 */
class CheckCertificateRevocationStatusActions extends Shape
{
    /**
     * @param array{
     *     RevokedStatusAction?: 'PASS'|'DROP'|'REJECT',
     *     UnknownStatusAction?: 'PASS'|'DROP'|'REJECT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
