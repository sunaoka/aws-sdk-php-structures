<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregateComplianceByConfigRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'|null $ComplianceType
 * @property ComplianceContributorCount|null $ComplianceContributorCount
 */
class Compliance extends Shape
{
    /**
     * @param array{
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA'|null,
     *     ComplianceContributorCount?: ComplianceContributorCount|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
