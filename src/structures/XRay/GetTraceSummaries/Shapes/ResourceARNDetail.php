<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ARN
 */
class ResourceARNDetail extends Shape
{
    /**
     * @param array{ARN?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
