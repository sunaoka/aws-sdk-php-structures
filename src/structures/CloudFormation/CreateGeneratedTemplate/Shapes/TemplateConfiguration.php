<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateGeneratedTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DELETE'|'RETAIN' $DeletionPolicy
 * @property 'DELETE'|'RETAIN' $UpdateReplacePolicy
 */
class TemplateConfiguration extends Shape
{
    /**
     * @param array{
     *     DeletionPolicy?: 'DELETE'|'RETAIN',
     *     UpdateReplacePolicy?: 'DELETE'|'RETAIN'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
