<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Max
 * @property double|null $Min
 */
class AwsEc2LaunchTemplateDataInstanceRequirementsMemoryGiBPerVCpuDetails extends Shape
{
    /**
     * @param array{
     *     Max?: double|null,
     *     Min?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
