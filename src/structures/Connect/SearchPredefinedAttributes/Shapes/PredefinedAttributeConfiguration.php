<?php

namespace Sunaoka\Aws\Structures\Connect\SearchPredefinedAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableValueValidationOnAssociation
 * @property bool|null $IsReadOnly
 */
class PredefinedAttributeConfiguration extends Shape
{
    /**
     * @param array{
     *     EnableValueValidationOnAssociation?: bool|null,
     *     IsReadOnly?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
