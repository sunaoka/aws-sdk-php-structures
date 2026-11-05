<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CaseId
 * @property string|null $CaseReferenceNumber
 */
class CaseEntry extends Shape
{
    /**
     * @param array{
     *     CaseId?: string|null,
     *     CaseReferenceNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
