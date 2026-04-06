<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\InputDestinationRequest>|null $Destinations
 * @property list<Shapes\InputDeviceRequest>|null $InputDevices
 * @property string $InputId
 * @property list<string>|null $InputSecurityGroups
 * @property list<Shapes\MediaConnectFlowRequest>|null $MediaConnectFlows
 * @property string|null $Name
 * @property string|null $RoleArn
 * @property list<Shapes\InputSourceRequest>|null $Sources
 * @property Shapes\SrtSettingsRequest|null $SrtSettings
 * @property Shapes\MulticastSettingsUpdateRequest|null $MulticastSettings
 */
class UpdateInputRequest extends Request
{
    /**
     * @param array{
     *     Destinations?: list<Shapes\InputDestinationRequest>|null,
     *     InputDevices?: list<Shapes\InputDeviceRequest>|null,
     *     InputId: string,
     *     InputSecurityGroups?: list<string>|null,
     *     MediaConnectFlows?: list<Shapes\MediaConnectFlowRequest>|null,
     *     Name?: string|null,
     *     RoleArn?: string|null,
     *     Sources?: list<Shapes\InputSourceRequest>|null,
     *     SrtSettings?: Shapes\SrtSettingsRequest|null,
     *     MulticastSettings?: Shapes\MulticastSettingsUpdateRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
