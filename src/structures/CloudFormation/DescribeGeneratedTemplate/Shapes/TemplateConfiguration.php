<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeGeneratedTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DELETE'|'RETAIN'|null $DeletionPolicy
 * @property 'DELETE'|'RETAIN'|null $UpdateReplacePolicy
 */
class TemplateConfiguration extends Shape
{
    /**
     * @param array{
     *     DeletionPolicy?: 'DELETE'|'RETAIN'|null,
     *     UpdateReplacePolicy?: 'DELETE'|'RETAIN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
