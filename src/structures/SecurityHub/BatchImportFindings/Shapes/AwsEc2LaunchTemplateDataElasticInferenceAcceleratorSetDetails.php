<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Count
 * @property string|null $Type
 */
class AwsEc2LaunchTemplateDataElasticInferenceAcceleratorSetDetails extends Shape
{
    /**
     * @param array{
     *     Count?: int|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
