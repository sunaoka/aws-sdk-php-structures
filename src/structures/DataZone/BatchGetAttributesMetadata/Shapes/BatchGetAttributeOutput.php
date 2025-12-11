<?php

namespace Sunaoka\Aws\Structures\DataZone\BatchGetAttributesMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attributeIdentifier
 * @property list<FormOutput>|null $forms
 */
class BatchGetAttributeOutput extends Shape
{
    /**
     * @param array{
     *     attributeIdentifier: string,
     *     forms?: list<FormOutput>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
