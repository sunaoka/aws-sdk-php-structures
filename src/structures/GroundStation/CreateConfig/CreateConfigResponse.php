<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $configArn
 * @property string|null $configId
 * @property 'antenna-downlink'|'antenna-downlink-demod-decode'|'antenna-uplink'|'dataflow-endpoint'|'tracking'|'uplink-echo'|'s3-recording'|null $configType
 */
class CreateConfigResponse extends Response
{
}
