<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\RegisterCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AIConfig|null $aiConfig
 */
class CapabilityBaseRequestConfig extends Shape
{
    /**
     * @param array{aiConfig?: AIConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
