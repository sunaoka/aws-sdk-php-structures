<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistributionWithTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property ParameterDefinitionSchema $Definition
 */
class ParameterDefinition extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Definition: ParameterDefinitionSchema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
