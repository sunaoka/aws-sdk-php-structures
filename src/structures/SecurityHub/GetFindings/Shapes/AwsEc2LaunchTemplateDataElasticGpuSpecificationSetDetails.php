<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 */
class AwsEc2LaunchTemplateDataElasticGpuSpecificationSetDetails extends Shape
{
    /**
     * @param array{Type?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
