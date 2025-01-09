<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetCompositeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $topic
 * @property 'ENABLED'|'DISABLED' $state
 */
class PropertyNotification extends Shape
{
    /**
     * @param array{
     *     topic: string,
     *     state: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
