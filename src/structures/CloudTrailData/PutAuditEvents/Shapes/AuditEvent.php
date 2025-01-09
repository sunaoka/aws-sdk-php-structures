<?php

namespace Sunaoka\Aws\Structures\CloudTrailData\PutAuditEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventData
 * @property string $eventDataChecksum
 * @property string $id
 */
class AuditEvent extends Shape
{
    /**
     * @param array{
     *     eventData: string,
     *     eventDataChecksum?: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
