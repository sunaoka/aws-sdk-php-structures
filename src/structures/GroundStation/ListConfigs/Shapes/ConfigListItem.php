<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $configId
 * @property 'antenna-downlink'|'antenna-downlink-demod-decode'|'tracking'|'dataflow-endpoint'|'antenna-uplink'|'uplink-echo'|'s3-recording'|null $configType
 * @property string|null $configArn
 * @property string|null $name
 */
class ConfigListItem extends Shape
{
    /**
     * @param array{
     *     configId?: string|null,
     *     configType?: 'antenna-downlink'|'antenna-downlink-demod-decode'|'tracking'|'dataflow-endpoint'|'antenna-uplink'|'uplink-echo'|'s3-recording'|null,
     *     configArn?: string|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
