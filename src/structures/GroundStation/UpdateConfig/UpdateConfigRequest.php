<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configId
 * @property string $name
 * @property 'antenna-downlink'|'antenna-downlink-demod-decode'|'tracking'|'dataflow-endpoint'|'antenna-uplink'|'uplink-echo'|'s3-recording' $configType
 * @property Shapes\ConfigTypeData $configData
 */
class UpdateConfigRequest extends Request
{
    /**
     * @param array{
     *     configId: string,
     *     name: string,
     *     configType: 'antenna-downlink'|'antenna-downlink-demod-decode'|'tracking'|'dataflow-endpoint'|'antenna-uplink'|'uplink-echo'|'s3-recording',
     *     configData: Shapes\ConfigTypeData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
