<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $attribute
 * @property string $thingName
 * @property string $roleArn
 * @property string|null $next
 */
class DeviceRegistryEnrichActivity extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     attribute: string,
     *     thingName: string,
     *     roleArn: string,
     *     next?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
