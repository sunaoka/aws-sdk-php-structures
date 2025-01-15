<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $NumberValue
 * @property bool|null $BooleanValue
 * @property string|null $StringValue
 */
class AnnotationValue extends Shape
{
    /**
     * @param array{
     *     NumberValue?: double|null,
     *     BooleanValue?: bool|null,
     *     StringValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
