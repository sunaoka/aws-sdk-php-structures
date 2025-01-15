<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DisableInsightRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FailureResource
 * @property string|null $ExceptionType
 * @property string|null $FailureCode
 * @property string|null $FailureDescription
 */
class PartialFailure extends Shape
{
    /**
     * @param array{
     *     FailureResource?: string|null,
     *     ExceptionType?: string|null,
     *     FailureCode?: string|null,
     *     FailureDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
