<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $configArn
 * @property string|null $configId
 * @property 'antenna-downlink'|'antenna-downlink-demod-decode'|'antenna-uplink'|'dataflow-endpoint'|'tracking'|'uplink-echo'|'s3-recording'|null $configType
 * @property string|null $name
 */
class ConfigListItem extends Shape
{
    /**
     * @param array{
     *     configArn?: string|null,
     *     configId?: string|null,
     *     configType?: 'antenna-downlink'|'antenna-downlink-demod-decode'|'antenna-uplink'|'dataflow-endpoint'|'tracking'|'uplink-echo'|'s3-recording'|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
