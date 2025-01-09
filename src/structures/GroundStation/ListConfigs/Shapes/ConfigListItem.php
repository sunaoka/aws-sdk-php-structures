<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $configArn
 * @property string $configId
 * @property 'antenna-downlink'|'antenna-downlink-demod-decode'|'antenna-uplink'|'dataflow-endpoint'|'tracking'|'uplink-echo'|'s3-recording' $configType
 * @property string $name
 */
class ConfigListItem extends Shape
{
    /**
     * @param array{
     *     configArn?: string,
     *     configId?: string,
     *     configType?: 'antenna-downlink'|'antenna-downlink-demod-decode'|'antenna-uplink'|'dataflow-endpoint'|'tracking'|'uplink-echo'|'s3-recording',
     *     name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
