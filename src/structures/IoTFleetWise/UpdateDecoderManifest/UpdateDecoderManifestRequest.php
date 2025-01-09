<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateDecoderManifest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property list<Shapes\SignalDecoder> $signalDecodersToAdd
 * @property list<Shapes\SignalDecoder> $signalDecodersToUpdate
 * @property list<string> $signalDecodersToRemove
 * @property list<Shapes\NetworkInterface> $networkInterfacesToAdd
 * @property list<Shapes\NetworkInterface> $networkInterfacesToUpdate
 * @property list<string> $networkInterfacesToRemove
 * @property 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING' $status
 * @property 'CUSTOM_DECODING' $defaultForUnmappedSignals
 */
class UpdateDecoderManifestRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     signalDecodersToAdd?: list<Shapes\SignalDecoder>,
     *     signalDecodersToUpdate?: list<Shapes\SignalDecoder>,
     *     signalDecodersToRemove?: list<string>,
     *     networkInterfacesToAdd?: list<Shapes\NetworkInterface>,
     *     networkInterfacesToUpdate?: list<Shapes\NetworkInterface>,
     *     networkInterfacesToRemove?: list<string>,
     *     status?: 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING',
     *     defaultForUnmappedSignals?: 'CUSTOM_DECODING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
