<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppAssessmentComplianceDrifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actualReferenceId
 * @property array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance> $actualValue
 * @property string $appId
 * @property string $appVersion
 * @property 'NotEqual'|'Added'|'Removed' $diffType
 * @property 'ApplicationCompliance'|'AppComponentResiliencyComplianceStatus' $driftType
 * @property string $entityId
 * @property string $entityType
 * @property string $expectedReferenceId
 * @property array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance> $expectedValue
 */
class ComplianceDrift extends Shape
{
    /**
     * @param array{
     *     actualReferenceId?: string,
     *     actualValue?: array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance>,
     *     appId?: string,
     *     appVersion?: string,
     *     diffType?: 'NotEqual'|'Added'|'Removed',
     *     driftType?: 'ApplicationCompliance'|'AppComponentResiliencyComplianceStatus',
     *     entityId?: string,
     *     entityType?: string,
     *     expectedReferenceId?: string,
     *     expectedValue?: array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
