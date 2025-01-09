<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AutoRecovery
 */
class AwsEc2LaunchTemplateDataMaintenanceOptionsDetails extends Shape
{
    /**
     * @param array{AutoRecovery?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
