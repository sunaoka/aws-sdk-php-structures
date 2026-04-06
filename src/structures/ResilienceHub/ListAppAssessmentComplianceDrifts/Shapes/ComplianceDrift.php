<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppAssessmentComplianceDrifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actualReferenceId
 * @property array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance>|null $actualValue
 * @property string|null $appId
 * @property string|null $appVersion
 * @property 'NotEqual'|null $diffType
 * @property 'ApplicationCompliance'|null $driftType
 * @property string|null $entityId
 * @property string|null $entityType
 * @property string|null $expectedReferenceId
 * @property array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance>|null $expectedValue
 */
class ComplianceDrift extends Shape
{
    /**
     * @param array{
     *     actualReferenceId?: string|null,
     *     actualValue?: array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance>|null,
     *     appId?: string|null,
     *     appVersion?: string|null,
     *     diffType?: 'NotEqual'|null,
     *     driftType?: 'ApplicationCompliance'|null,
     *     entityId?: string|null,
     *     entityType?: string|null,
     *     expectedReferenceId?: string|null,
     *     expectedValue?: array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
