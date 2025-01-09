<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetComplianceSummaryByResourceType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceType
 * @property ComplianceSummary $ComplianceSummary
 */
class ComplianceSummaryByResourceType extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string,
     *     ComplianceSummary?: ComplianceSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
