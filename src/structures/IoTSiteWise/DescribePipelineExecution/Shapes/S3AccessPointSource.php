<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessPointArn
 * @property string|null $prefix
 */
class S3AccessPointSource extends Shape
{
    /**
     * @param array{
     *     accessPointArn: string,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
