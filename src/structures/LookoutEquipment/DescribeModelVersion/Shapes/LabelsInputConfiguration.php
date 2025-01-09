<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeModelVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LabelsS3InputConfiguration $S3InputConfiguration
 * @property string $LabelGroupName
 */
class LabelsInputConfiguration extends Shape
{
    /**
     * @param array{
     *     S3InputConfiguration?: LabelsS3InputConfiguration,
     *     LabelGroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
