<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UpdatedField
 * @property string $OldValue
 * @property string $NewValue
 */
class FindingHistoryUpdate extends Shape
{
    /**
     * @param array{
     *     UpdatedField?: string,
     *     OldValue?: string,
     *     NewValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
