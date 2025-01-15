<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetComplianceSummaryByResourceType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property ComplianceSummary|null $ComplianceSummary
 */
class ComplianceSummaryByResourceType extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     ComplianceSummary?: ComplianceSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
