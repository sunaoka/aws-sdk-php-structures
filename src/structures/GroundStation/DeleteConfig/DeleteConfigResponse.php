<?php

namespace Sunaoka\Aws\Structures\GroundStation\DeleteConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $configId
 * @property 'antenna-downlink'|'antenna-downlink-demod-decode'|'tracking'|'dataflow-endpoint'|'antenna-uplink'|'uplink-echo'|'s3-recording'|null $configType
 * @property string|null $configArn
 */
class DeleteConfigResponse extends Response
{
}
