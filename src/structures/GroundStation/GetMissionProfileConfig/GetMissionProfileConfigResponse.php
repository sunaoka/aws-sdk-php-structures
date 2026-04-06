<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMissionProfileConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $configId
 * @property string $configArn
 * @property string $name
 * @property 'antenna-downlink'|'antenna-downlink-demod-decode'|'tracking'|'dataflow-endpoint'|'antenna-uplink'|'uplink-echo'|'s3-recording'|'telemetry-sink'|null $configType
 * @property Shapes\ConfigTypeData $configData
 * @property array<string, string>|null $tags
 */
class GetMissionProfileConfigResponse extends Response
{
}
