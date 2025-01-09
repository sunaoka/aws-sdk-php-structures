<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Status
 */
class AwsGuardDutyDetectorDataSourcesFlowLogsDetails extends Shape
{
    /**
     * @param array{Status?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
