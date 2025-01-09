<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int<0, 999>> $SuccessCodes
 * @property list<int<0, 999>> $FailureCodes
 */
class ResponseInspectionStatusCode extends Shape
{
    /**
     * @param array{
     *     SuccessCodes: list<int<0, 999>>,
     *     FailureCodes: list<int<0, 999>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
