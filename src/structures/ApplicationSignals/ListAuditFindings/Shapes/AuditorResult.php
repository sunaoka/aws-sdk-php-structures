<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListAuditFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Auditor
 * @property string|null $Description
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'NONE'|null $Severity
 */
class AuditorResult extends Shape
{
    /**
     * @param array{
     *     Auditor?: string|null,
     *     Description?: string|null,
     *     Severity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
