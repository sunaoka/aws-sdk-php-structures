<?php

namespace Sunaoka\Aws\Structures\Emr\CancelSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StepId
 * @property 'SUBMITTED'|'FAILED'|null $Status
 * @property string|null $Reason
 */
class CancelStepsInfo extends Shape
{
    /**
     * @param array{
     *     StepId?: string|null,
     *     Status?: 'SUBMITTED'|'FAILED'|null,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
