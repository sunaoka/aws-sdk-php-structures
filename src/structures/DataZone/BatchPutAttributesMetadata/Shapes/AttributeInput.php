<?php

namespace Sunaoka\Aws\Structures\DataZone\BatchPutAttributesMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attributeIdentifier
 * @property list<FormInput> $forms
 */
class AttributeInput extends Shape
{
    /**
     * @param array{
     *     attributeIdentifier: string,
     *     forms: list<FormInput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
