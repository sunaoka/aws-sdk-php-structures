<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetEnabledControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lastOperationIdentifier
 * @property 'SUCCEEDED'|'FAILED'|'UNDER_CHANGE'|null $status
 */
class EnablementStatusSummary extends Shape
{
    /**
     * @param array{
     *     lastOperationIdentifier?: string|null,
     *     status?: 'SUCCEEDED'|'FAILED'|'UNDER_CHANGE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
