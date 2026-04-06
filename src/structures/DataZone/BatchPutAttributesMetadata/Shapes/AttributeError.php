<?php

namespace Sunaoka\Aws\Structures\DataZone\BatchPutAttributesMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attributeIdentifier
 * @property string $code
 * @property string $message
 */
class AttributeError extends Shape
{
    /**
     * @param array{
     *     attributeIdentifier: string,
     *     code: string,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
