<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Status
 */
class AwsGuardDutyDetectorDataSourcesS3LogsDetails extends Shape
{
    /**
     * @param array{Status?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
