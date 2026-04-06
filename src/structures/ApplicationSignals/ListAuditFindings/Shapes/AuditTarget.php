<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListAuditFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property AuditTargetEntity $Data
 */
class AuditTarget extends Shape
{
    /**
     * @param array{
     *     Type: string,
     *     Data: AuditTargetEntity
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
