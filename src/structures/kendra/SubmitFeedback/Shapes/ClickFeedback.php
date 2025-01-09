<?php

namespace Sunaoka\Aws\Structures\kendra\SubmitFeedback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResultId
 * @property \Aws\Api\DateTimeResult $ClickTime
 */
class ClickFeedback extends Shape
{
    /**
     * @param array{
     *     ResultId: string,
     *     ClickTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
