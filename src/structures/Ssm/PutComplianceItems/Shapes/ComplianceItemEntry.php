<?php

namespace Sunaoka\Aws\Structures\Ssm\PutComplianceItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Title
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED' $Severity
 * @property 'COMPLIANT'|'NON_COMPLIANT' $Status
 * @property array<string, string>|null $Details
 */
class ComplianceItemEntry extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Title?: string|null,
     *     Severity: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED',
     *     Status: 'COMPLIANT'|'NON_COMPLIANT',
     *     Details?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
