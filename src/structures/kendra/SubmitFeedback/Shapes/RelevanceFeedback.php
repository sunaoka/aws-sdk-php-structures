<?php

namespace Sunaoka\Aws\Structures\kendra\SubmitFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResultId
 * @property 'RELEVANT'|'NOT_RELEVANT' $RelevanceValue
 */
class RelevanceFeedback extends Shape
{
    /**
     * @param array{
     *     ResultId: string,
     *     RelevanceValue: 'RELEVANT'|'NOT_RELEVANT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
