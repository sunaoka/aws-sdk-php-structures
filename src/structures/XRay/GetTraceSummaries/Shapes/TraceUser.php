<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property list<ServiceId> $ServiceIds
 */
class TraceUser extends Shape
{
    /**
     * @param array{
     *     UserName?: string,
     *     ServiceIds?: list<ServiceId>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
