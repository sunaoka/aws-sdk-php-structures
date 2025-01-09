<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EDGE'|'CLOUD' $computeLocation
 * @property ForwardingConfig $forwardingConfig
 */
class TransformProcessingConfig extends Shape
{
    /**
     * @param array{
     *     computeLocation: 'EDGE'|'CLOUD',
     *     forwardingConfig?: ForwardingConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
