<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAccessPreviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERNAL_ERROR'|'INVALID_CONFIGURATION' $code
 */
class AccessPreviewStatusReason extends Shape
{
    /**
     * @param array{code: 'INTERNAL_ERROR'|'INVALID_CONFIGURATION'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
