<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GetSolVnfcResourceInfoMetadata $metadata
 */
class GetSolVnfcResourceInfo extends Shape
{
    /**
     * @param array{metadata?: GetSolVnfcResourceInfoMetadata} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
