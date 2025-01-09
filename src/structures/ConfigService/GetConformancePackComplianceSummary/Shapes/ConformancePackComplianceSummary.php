<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetConformancePackComplianceSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConformancePackName
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA' $ConformancePackComplianceStatus
 */
class ConformancePackComplianceSummary extends Shape
{
    /**
     * @param array{
     *     ConformancePackName: string,
     *     ConformancePackComplianceStatus: 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
