<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|'ALLOWED' $ServerlessVectorAcceleration
 */
class VectorOptions extends Shape
{
    /**
     * @param array{ServerlessVectorAcceleration: 'ENABLED'|'DISABLED'|'ALLOWED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
