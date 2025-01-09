<?php

namespace Sunaoka\Aws\Structures\Ssm\PutComplianceItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Title
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED' $Severity
 * @property 'COMPLIANT'|'NON_COMPLIANT' $Status
 * @property array<string, string> $Details
 */
class ComplianceItemEntry extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Title?: string,
     *     Severity: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED',
     *     Status: 'COMPLIANT'|'NON_COMPLIANT',
     *     Details?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
