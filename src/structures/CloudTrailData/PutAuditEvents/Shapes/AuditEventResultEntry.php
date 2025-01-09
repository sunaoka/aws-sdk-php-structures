<?php

namespace Sunaoka\Aws\Structures\CloudTrailData\PutAuditEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventID
 * @property string $id
 */
class AuditEventResultEntry extends Shape
{
    /**
     * @param array{
     *     eventID: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
