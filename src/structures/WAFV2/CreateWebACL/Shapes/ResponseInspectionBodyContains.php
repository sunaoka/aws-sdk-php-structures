<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SuccessStrings
 * @property list<string> $FailureStrings
 */
class ResponseInspectionBodyContains extends Shape
{
    /**
     * @param array{
     *     SuccessStrings: list<string>,
     *     FailureStrings: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
