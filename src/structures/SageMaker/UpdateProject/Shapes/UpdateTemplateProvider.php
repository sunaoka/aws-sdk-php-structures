<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CfnUpdateTemplateProvider|null $CfnTemplateProvider
 */
class UpdateTemplateProvider extends Shape
{
    /**
     * @param array{CfnTemplateProvider?: CfnUpdateTemplateProvider|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
