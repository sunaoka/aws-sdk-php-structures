<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CpuCredits
 */
class AwsEc2LaunchTemplateDataCreditSpecificationDetails extends Shape
{
    /**
     * @param array{CpuCredits?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
