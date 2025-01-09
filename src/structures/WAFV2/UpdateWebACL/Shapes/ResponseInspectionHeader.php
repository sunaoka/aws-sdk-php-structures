<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $SuccessValues
 * @property list<string> $FailureValues
 */
class ResponseInspectionHeader extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     SuccessValues: list<string>,
     *     FailureValues: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
