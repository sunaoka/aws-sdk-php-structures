<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $attribute
 * @property string $thingName
 * @property string $roleArn
 * @property string $next
 */
class DeviceRegistryEnrichActivity extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     attribute: string,
     *     thingName: string,
     *     roleArn: string,
     *     next?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
