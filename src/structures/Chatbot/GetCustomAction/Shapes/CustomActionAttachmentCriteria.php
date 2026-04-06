<?php

namespace Sunaoka\Aws\Structures\Chatbot\GetCustomAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HAS_VALUE'|'EQUALS' $Operator
 * @property string $VariableName
 * @property string|null $Value
 */
class CustomActionAttachmentCriteria extends Shape
{
    /**
     * @param array{
     *     Operator: 'HAS_VALUE'|'EQUALS',
     *     VariableName: string,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
