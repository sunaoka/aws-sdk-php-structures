<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateCaseRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BooleanOperands|null $equalTo
 * @property BooleanOperands|null $notEqualTo
 */
class BooleanCondition extends Shape
{
    /**
     * @param array{
     *     equalTo?: BooleanOperands|null,
     *     notEqualTo?: BooleanOperands|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
