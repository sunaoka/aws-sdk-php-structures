<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStackRefactor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StackName
 * @property string|null $TemplateBody
 * @property string|null $TemplateURL
 */
class StackDefinition extends Shape
{
    /**
     * @param array{
     *     StackName?: string|null,
     *     TemplateBody?: string|null,
     *     TemplateURL?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
