<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetCaseRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $parentFieldOptionValue
 * @property list<string> $childFieldOptionValues
 */
class ParentChildFieldOptionsMapping extends Shape
{
    /**
     * @param array{
     *     parentFieldOptionValue: string,
     *     childFieldOptionValues: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
