<?php

namespace Sunaoka\Aws\Structures\GroundStation\DeleteConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configId
 * @property 'antenna-downlink'|'antenna-downlink-demod-decode'|'tracking'|'dataflow-endpoint'|'antenna-uplink'|'uplink-echo'|'s3-recording' $configType
 */
class DeleteConfigRequest extends Request
{
    /**
     * @param array{
     *     configId: string,
     *     configType: 'antenna-downlink'|'antenna-downlink-demod-decode'|'tracking'|'dataflow-endpoint'|'antenna-uplink'|'uplink-echo'|'s3-recording'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
