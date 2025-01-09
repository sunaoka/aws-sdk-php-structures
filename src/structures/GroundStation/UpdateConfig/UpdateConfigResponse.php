<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $configArn
 * @property string $configId
 * @property 'antenna-downlink'|'antenna-downlink-demod-decode'|'antenna-uplink'|'dataflow-endpoint'|'tracking'|'uplink-echo'|'s3-recording' $configType
 */
class UpdateConfigResponse extends Response
{
}
