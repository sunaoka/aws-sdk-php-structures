<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Status
 */
class AwsGuardDutyDetectorDataSourcesDnsLogsDetails extends Shape
{
    /**
     * @param array{Status?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
