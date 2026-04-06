<?php

namespace Sunaoka\Aws\Structures\CloudFront\CopyDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StringSchemaConfig|null $StringSchema
 */
class ParameterDefinitionSchema extends Shape
{
    /**
     * @param array{StringSchema?: StringSchemaConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
