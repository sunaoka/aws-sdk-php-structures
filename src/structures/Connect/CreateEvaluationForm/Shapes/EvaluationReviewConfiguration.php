<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationReviewNotificationRecipient> $ReviewNotificationRecipients
 * @property int|null $EligibilityDays
 */
class EvaluationReviewConfiguration extends Shape
{
    /**
     * @param array{
     *     ReviewNotificationRecipients: list<EvaluationReviewNotificationRecipient>,
     *     EligibilityDays?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
