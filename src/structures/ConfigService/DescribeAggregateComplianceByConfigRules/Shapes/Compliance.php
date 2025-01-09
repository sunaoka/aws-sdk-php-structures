<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregateComplianceByConfigRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA' $ComplianceType
 * @property ComplianceContributorCount $ComplianceContributorCount
 */
class Compliance extends Shape
{
    /**
     * @param array{
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'NOT_APPLICABLE'|'INSUFFICIENT_DATA',
     *     ComplianceContributorCount?: ComplianceContributorCount
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
