<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $configId
 * @property 'antenna-downlink'|'antenna-downlink-demod-decode'|'tracking'|'dataflow-endpoint'|'antenna-uplink'|'uplink-echo'|'s3-recording'|'telemetry-sink'|null $configType
 * @property string|null $configArn
 */
class CreateConfigResponse extends Response
{
}
