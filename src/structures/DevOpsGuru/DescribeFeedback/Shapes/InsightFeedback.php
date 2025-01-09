<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'VALID_COLLECTION'|'RECOMMENDATION_USEFUL'|'ALERT_TOO_SENSITIVE'|'DATA_NOISY_ANOMALY'|'DATA_INCORRECT' $Feedback
 */
class InsightFeedback extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Feedback?: 'VALID_COLLECTION'|'RECOMMENDATION_USEFUL'|'ALERT_TOO_SENSITIVE'|'DATA_NOISY_ANOMALY'|'DATA_INCORRECT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
