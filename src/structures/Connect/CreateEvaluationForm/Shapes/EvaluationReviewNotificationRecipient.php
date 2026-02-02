<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER_ID' $Type
 * @property EvaluationReviewNotificationRecipientValue $Value
 */
class EvaluationReviewNotificationRecipient extends Shape
{
    /**
     * @param array{
     *     Type: 'USER_ID',
     *     Value: EvaluationReviewNotificationRecipientValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
