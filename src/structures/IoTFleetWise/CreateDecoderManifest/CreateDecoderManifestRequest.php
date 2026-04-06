<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateDecoderManifest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string $modelManifestArn
 * @property list<Shapes\SignalDecoder>|null $signalDecoders
 * @property list<Shapes\NetworkInterface>|null $networkInterfaces
 * @property list<Shapes\Tag>|null $tags
 */
class CreateDecoderManifestRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     modelManifestArn: string,
     *     signalDecoders?: list<Shapes\SignalDecoder>|null,
     *     networkInterfaces?: list<Shapes\NetworkInterface>|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
