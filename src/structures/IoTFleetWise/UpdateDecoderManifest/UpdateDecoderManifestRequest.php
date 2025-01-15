<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateDecoderManifest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\SignalDecoder>|null $signalDecodersToAdd
 * @property list<Shapes\SignalDecoder>|null $signalDecodersToUpdate
 * @property list<string>|null $signalDecodersToRemove
 * @property list<Shapes\NetworkInterface>|null $networkInterfacesToAdd
 * @property list<Shapes\NetworkInterface>|null $networkInterfacesToUpdate
 * @property list<string>|null $networkInterfacesToRemove
 * @property 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING'|null $status
 * @property 'CUSTOM_DECODING'|null $defaultForUnmappedSignals
 */
class UpdateDecoderManifestRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     signalDecodersToAdd?: list<Shapes\SignalDecoder>|null,
     *     signalDecodersToUpdate?: list<Shapes\SignalDecoder>|null,
     *     signalDecodersToRemove?: list<string>|null,
     *     networkInterfacesToAdd?: list<Shapes\NetworkInterface>|null,
     *     networkInterfacesToUpdate?: list<Shapes\NetworkInterface>|null,
     *     networkInterfacesToRemove?: list<string>|null,
     *     status?: 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING'|null,
     *     defaultForUnmappedSignals?: 'CUSTOM_DECODING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
