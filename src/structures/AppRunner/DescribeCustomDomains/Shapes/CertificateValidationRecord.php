<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeCustomDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Type
 * @property string $Value
 * @property 'PENDING_VALIDATION'|'SUCCESS'|'FAILED' $Status
 */
class CertificateValidationRecord extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Type?: string,
     *     Value?: string,
     *     Status?: 'PENDING_VALIDATION'|'SUCCESS'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
