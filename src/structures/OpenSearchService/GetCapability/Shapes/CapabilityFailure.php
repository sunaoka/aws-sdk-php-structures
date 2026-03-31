<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KMS_KEY_INSUFFICIENT_PERMISSION'|null $reason
 * @property string|null $details
 */
class CapabilityFailure extends Shape
{
    /**
     * @param array{
     *     reason?: 'KMS_KEY_INSUFFICIENT_PERMISSION'|null,
     *     details?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
