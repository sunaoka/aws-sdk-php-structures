<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledBaselines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lastOperationIdentifier
 * @property 'SUCCEEDED'|'FAILED'|'UNDER_CHANGE' $status
 */
class EnablementStatusSummary extends Shape
{
    /**
     * @param array{
     *     lastOperationIdentifier?: string,
     *     status?: 'SUCCEEDED'|'FAILED'|'UNDER_CHANGE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
