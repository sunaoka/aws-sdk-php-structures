<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateDecoderManifest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $modelManifestArn
 * @property list<Shapes\SignalDecoder> $signalDecoders
 * @property list<Shapes\NetworkInterface> $networkInterfaces
 * @property 'CUSTOM_DECODING' $defaultForUnmappedSignals
 * @property list<Shapes\Tag> $tags
 */
class CreateDecoderManifestRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     modelManifestArn: string,
     *     signalDecoders?: list<Shapes\SignalDecoder>,
     *     networkInterfaces?: list<Shapes\NetworkInterface>,
     *     defaultForUnmappedSignals?: 'CUSTOM_DECODING',
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
