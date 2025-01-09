<?php

namespace Sunaoka\Aws\Structures\Emr\CancelSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StepId
 * @property 'SUBMITTED'|'FAILED' $Status
 * @property string $Reason
 */
class CancelStepsInfo extends Shape
{
    /**
     * @param array{
     *     StepId?: string,
     *     Status?: 'SUBMITTED'|'FAILED',
     *     Reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
