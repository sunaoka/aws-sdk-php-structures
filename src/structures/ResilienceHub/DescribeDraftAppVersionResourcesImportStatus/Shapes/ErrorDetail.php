<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeDraftAppVersionResourcesImportStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorMessage
 */
class ErrorDetail extends Shape
{
    /**
     * @param array{errorMessage?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
