<?php

namespace Sunaoka\Aws\Structures\SesV2\GetAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'FAILED'|'GRANTED'|'DENIED'|null $Status
 * @property string|null $CaseId
 */
class ReviewDetails extends Shape
{
    /**
     * @param array{
     *     Status?: 'PENDING'|'FAILED'|'GRANTED'|'DENIED'|null,
     *     CaseId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
