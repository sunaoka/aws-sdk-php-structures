<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Identifier
 * @property list<string> $SuccessValues
 * @property list<string> $FailureValues
 */
class ResponseInspectionJson extends Shape
{
    /**
     * @param array{
     *     Identifier: string,
     *     SuccessValues: list<string>,
     *     FailureValues: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
