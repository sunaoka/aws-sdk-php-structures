<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UpdatedField
 * @property string|null $OldValue
 * @property string|null $NewValue
 */
class FindingHistoryUpdate extends Shape
{
    /**
     * @param array{
     *     UpdatedField?: string|null,
     *     OldValue?: string|null,
     *     NewValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
