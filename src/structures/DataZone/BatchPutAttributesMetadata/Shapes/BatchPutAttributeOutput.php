<?php

namespace Sunaoka\Aws\Structures\DataZone\BatchPutAttributesMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attributeIdentifier
 */
class BatchPutAttributeOutput extends Shape
{
    /**
     * @param array{attributeIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
