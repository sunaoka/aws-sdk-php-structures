<?php

namespace Sunaoka\Aws\Structures\SesV2\GetAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'FAILED'|'GRANTED'|'DENIED' $Status
 * @property string $CaseId
 */
class ReviewDetails extends Shape
{
    /**
     * @param array{
     *     Status?: 'PENDING'|'FAILED'|'GRANTED'|'DENIED',
     *     CaseId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
