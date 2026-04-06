<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledBaselines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'FAILED'|'UNDER_CHANGE'|null $status
 * @property string|null $lastOperationIdentifier
 */
class EnablementStatusSummary extends Shape
{
    /**
     * @param array{
     *     status?: 'SUCCEEDED'|'FAILED'|'UNDER_CHANGE'|null,
     *     lastOperationIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
