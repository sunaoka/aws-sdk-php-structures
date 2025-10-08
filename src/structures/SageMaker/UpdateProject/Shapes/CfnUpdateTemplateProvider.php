<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TemplateName
 * @property string $TemplateURL
 * @property list<CfnStackUpdateParameter>|null $Parameters
 */
class CfnUpdateTemplateProvider extends Shape
{
    /**
     * @param array{
     *     TemplateName: string,
     *     TemplateURL: string,
     *     Parameters?: list<CfnStackUpdateParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
