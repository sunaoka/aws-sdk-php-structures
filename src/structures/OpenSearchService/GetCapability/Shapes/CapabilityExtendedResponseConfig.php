<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AIConfig|null $aiConfig
 */
class CapabilityExtendedResponseConfig extends Shape
{
    /**
     * @param array{aiConfig?: AIConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
