<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionPayloadFieldValue $value
 * @property ActionPayloadFieldValue $displayValue
 */
class ActionReviewPayloadFieldAllowedValue extends Shape
{
    /**
     * @param array{
     *     value?: ActionPayloadFieldValue,
     *     displayValue?: ActionPayloadFieldValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
