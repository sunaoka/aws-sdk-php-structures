<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateCustomAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HAS_VALUE'|'EQUALS' $Operator
 * @property string $VariableName
 * @property string $Value
 */
class CustomActionAttachmentCriteria extends Shape
{
    /**
     * @param array{
     *     Operator: 'HAS_VALUE'|'EQUALS',
     *     VariableName: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
