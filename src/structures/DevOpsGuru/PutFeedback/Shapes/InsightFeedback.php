<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\PutFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'VALID_COLLECTION'|'RECOMMENDATION_USEFUL'|'ALERT_TOO_SENSITIVE'|'DATA_NOISY_ANOMALY'|'DATA_INCORRECT'|null $Feedback
 */
class InsightFeedback extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Feedback?: 'VALID_COLLECTION'|'RECOMMENDATION_USEFUL'|'ALERT_TOO_SENSITIVE'|'DATA_NOISY_ANOMALY'|'DATA_INCORRECT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
