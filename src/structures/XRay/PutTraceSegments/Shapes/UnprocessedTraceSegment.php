<?php

namespace Sunaoka\Aws\Structures\XRay\PutTraceSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $ErrorCode
 * @property string|null $Message
 */
class UnprocessedTraceSegment extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     ErrorCode?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
