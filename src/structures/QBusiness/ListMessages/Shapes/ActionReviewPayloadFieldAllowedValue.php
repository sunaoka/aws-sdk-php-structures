<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionPayloadFieldValue|null $value
 * @property ActionPayloadFieldValue|null $displayValue
 */
class ActionReviewPayloadFieldAllowedValue extends Shape
{
    /**
     * @param array{
     *     value?: ActionPayloadFieldValue|null,
     *     displayValue?: ActionPayloadFieldValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
