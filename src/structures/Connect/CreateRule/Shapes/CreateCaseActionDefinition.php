<?php

namespace Sunaoka\Aws\Structures\Connect\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldValue> $Fields
 * @property string $TemplateId
 */
class CreateCaseActionDefinition extends Shape
{
    /**
     * @param array{
     *     Fields: list<FieldValue>,
     *     TemplateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
