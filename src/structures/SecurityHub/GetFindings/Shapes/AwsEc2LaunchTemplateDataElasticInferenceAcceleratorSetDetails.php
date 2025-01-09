<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Count
 * @property string $Type
 */
class AwsEc2LaunchTemplateDataElasticInferenceAcceleratorSetDetails extends Shape
{
    /**
     * @param array{
     *     Count?: int,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
