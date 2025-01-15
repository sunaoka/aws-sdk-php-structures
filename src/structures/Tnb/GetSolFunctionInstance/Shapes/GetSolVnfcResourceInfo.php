<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GetSolVnfcResourceInfoMetadata|null $metadata
 */
class GetSolVnfcResourceInfo extends Shape
{
    /**
     * @param array{metadata?: GetSolVnfcResourceInfoMetadata|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
