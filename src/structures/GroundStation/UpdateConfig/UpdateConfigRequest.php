<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConfigTypeData $configData
 * @property string $configId
 * @property 'antenna-downlink'|'antenna-downlink-demod-decode'|'tracking'|'dataflow-endpoint'|'antenna-uplink'|'uplink-echo'|'s3-recording' $configType
 * @property string $name
 */
class UpdateConfigRequest extends Request
{
    /**
     * @param array{
     *     configData: Shapes\ConfigTypeData,
     *     configId: string,
     *     configType: 'antenna-downlink'|'antenna-downlink-demod-decode'|'tracking'|'dataflow-endpoint'|'antenna-uplink'|'uplink-echo'|'s3-recording',
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
