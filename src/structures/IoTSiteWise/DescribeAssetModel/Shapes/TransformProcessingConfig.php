<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EDGE'|'CLOUD' $computeLocation
 * @property ForwardingConfig|null $forwardingConfig
 */
class TransformProcessingConfig extends Shape
{
    /**
     * @param array{
     *     computeLocation: 'EDGE'|'CLOUD',
     *     forwardingConfig?: ForwardingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
