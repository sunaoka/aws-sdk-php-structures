<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserName
 * @property list<ServiceId>|null $ServiceIds
 */
class TraceUser extends Shape
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     ServiceIds?: list<ServiceId>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
