<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Status
 */
class AwsGuardDutyDetectorDataSourcesDnsLogsDetails extends Shape
{
    /**
     * @param array{Status?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
