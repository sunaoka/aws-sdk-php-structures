<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIND_MATCHES' $TransformType
 * @property FindMatchesParameters|null $FindMatchesParameters
 */
class TransformParameters extends Shape
{
    /**
     * @param array{
     *     TransformType: 'FIND_MATCHES',
     *     FindMatchesParameters?: FindMatchesParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
