<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMissionProfileConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configId
 * @property 'antenna-downlink'|'antenna-downlink-demod-decode'|'tracking'|'dataflow-endpoint'|'antenna-uplink'|'uplink-echo'|'s3-recording'|'telemetry-sink' $configType
 */
class GetMissionProfileConfigRequest extends Request
{
    /**
     * @param array{
     *     configId: string,
     *     configType: 'antenna-downlink'|'antenna-downlink-demod-decode'|'tracking'|'dataflow-endpoint'|'antenna-uplink'|'uplink-echo'|'s3-recording'|'telemetry-sink'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
