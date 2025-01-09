<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Max
 * @property int $Min
 */
class AwsEc2LaunchTemplateDataInstanceRequirementsMemoryMiBDetails extends Shape
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
