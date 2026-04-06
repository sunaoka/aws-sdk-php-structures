<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeTLSInspectionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PASS'|'DROP'|'REJECT'|null $RevokedStatusAction
 * @property 'PASS'|'DROP'|'REJECT'|null $UnknownStatusAction
 */
class CheckCertificateRevocationStatusActions extends Shape
{
    /**
     * @param array{
     *     RevokedStatusAction?: 'PASS'|'DROP'|'REJECT'|null,
     *     UnknownStatusAction?: 'PASS'|'DROP'|'REJECT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
