<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CfnTemplateProviderDetail|null $CfnTemplateProviderDetail
 */
class TemplateProviderDetail extends Shape
{
    /**
     * @param array{CfnTemplateProviderDetail?: CfnTemplateProviderDetail|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
