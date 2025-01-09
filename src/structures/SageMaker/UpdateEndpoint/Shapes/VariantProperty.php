<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DesiredInstanceCount'|'DesiredWeight'|'DataCaptureConfig' $VariantPropertyType
 */
class VariantProperty extends Shape
{
    /**
     * @param array{VariantPropertyType: 'DesiredInstanceCount'|'DesiredWeight'|'DataCaptureConfig'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
