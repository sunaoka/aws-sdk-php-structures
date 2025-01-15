<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LabelsS3InputConfiguration|null $S3InputConfiguration
 * @property string|null $LabelGroupName
 */
class LabelsInputConfiguration extends Shape
{
    /**
     * @param array{
     *     S3InputConfiguration?: LabelsS3InputConfiguration|null,
     *     LabelGroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
