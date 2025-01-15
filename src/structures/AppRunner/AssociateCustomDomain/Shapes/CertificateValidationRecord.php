<?php

namespace Sunaoka\Aws\Structures\AppRunner\AssociateCustomDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Type
 * @property string|null $Value
 * @property 'PENDING_VALIDATION'|'SUCCESS'|'FAILED'|null $Status
 */
class CertificateValidationRecord extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Type?: string|null,
     *     Value?: string|null,
     *     Status?: 'PENDING_VALIDATION'|'SUCCESS'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
