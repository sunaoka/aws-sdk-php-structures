<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int> $SuccessCodes
 * @property list<int> $FailureCodes
 */
class ResponseInspectionStatusCode extends Shape
{
    /**
     * @param array{
     *     SuccessCodes: list<int>,
     *     FailureCodes: list<int>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
