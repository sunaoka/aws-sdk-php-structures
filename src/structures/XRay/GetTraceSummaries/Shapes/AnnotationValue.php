<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $NumberValue
 * @property bool $BooleanValue
 * @property string $StringValue
 */
class AnnotationValue extends Shape
{
    /**
     * @param array{
     *     NumberValue?: double,
     *     BooleanValue?: bool,
     *     StringValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
