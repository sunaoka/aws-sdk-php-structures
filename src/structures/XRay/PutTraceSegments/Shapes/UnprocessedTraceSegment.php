<?php

namespace Sunaoka\Aws\Structures\XRay\PutTraceSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ErrorCode
 * @property string $Message
 */
class UnprocessedTraceSegment extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     ErrorCode?: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
