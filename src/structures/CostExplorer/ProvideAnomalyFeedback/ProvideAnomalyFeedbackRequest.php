<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ProvideAnomalyFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyId
 * @property 'YES'|'NO'|'PLANNED_ACTIVITY' $Feedback
 */
class ProvideAnomalyFeedbackRequest extends Request
{
    /**
     * @param array{
     *     AnomalyId: string,
     *     Feedback: 'YES'|'NO'|'PLANNED_ACTIVITY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
