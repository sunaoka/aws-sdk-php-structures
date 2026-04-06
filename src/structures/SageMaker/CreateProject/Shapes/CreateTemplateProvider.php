<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CfnCreateTemplateProvider|null $CfnTemplateProvider
 */
class CreateTemplateProvider extends Shape
{
    /**
     * @param array{CfnTemplateProvider?: CfnCreateTemplateProvider|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
