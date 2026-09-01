<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3AccessPointSource|null $s3AccessPoint
 */
class MountSource extends Shape
{
    /**
     * @param array{s3AccessPoint?: S3AccessPointSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
