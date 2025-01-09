<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteInsightRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FailureResource
 * @property string $ExceptionType
 * @property string $FailureCode
 * @property string $FailureDescription
 */
class PartialFailure extends Shape
{
    /**
     * @param array{
     *     FailureResource?: string,
     *     ExceptionType?: string,
     *     FailureCode?: string,
     *     FailureDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
