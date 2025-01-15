<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AutoRecovery
 */
class AwsEc2LaunchTemplateDataMaintenanceOptionsDetails extends Shape
{
    /**
     * @param array{AutoRecovery?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
