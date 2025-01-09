<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsSsmComplianceSummary $ComplianceSummary
 */
class AwsSsmPatch extends Shape
{
    /**
     * @param array{ComplianceSummary?: AwsSsmComplianceSummary} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
