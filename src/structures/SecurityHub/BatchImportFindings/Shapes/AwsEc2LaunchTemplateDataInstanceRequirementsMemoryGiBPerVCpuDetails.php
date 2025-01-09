<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Max
 * @property double $Min
 */
class AwsEc2LaunchTemplateDataInstanceRequirementsMemoryGiBPerVCpuDetails extends Shape
{
    /**
     * @param array{
     *     Max?: double,
     *     Min?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
