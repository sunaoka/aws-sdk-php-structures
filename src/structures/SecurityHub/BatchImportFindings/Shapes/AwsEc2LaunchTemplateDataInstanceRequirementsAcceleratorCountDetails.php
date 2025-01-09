<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Max
 * @property int $Min
 */
class AwsEc2LaunchTemplateDataInstanceRequirementsAcceleratorCountDetails extends Shape
{
    /**
     * @param array{
     *     Max?: int,
     *     Min?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
