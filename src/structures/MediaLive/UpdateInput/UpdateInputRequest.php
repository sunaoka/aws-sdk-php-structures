<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\InputDestinationRequest> $Destinations
 * @property list<Shapes\InputDeviceRequest> $InputDevices
 * @property string $InputId
 * @property list<string> $InputSecurityGroups
 * @property list<Shapes\MediaConnectFlowRequest> $MediaConnectFlows
 * @property string $Name
 * @property string $RoleArn
 * @property list<Shapes\InputSourceRequest> $Sources
 * @property Shapes\SrtSettingsRequest $SrtSettings
 * @property Shapes\MulticastSettingsUpdateRequest $MulticastSettings
 */
class UpdateInputRequest extends Request
{
    /**
     * @param array{
     *     Destinations?: list<Shapes\InputDestinationRequest>,
     *     InputDevices?: list<Shapes\InputDeviceRequest>,
     *     InputId: string,
     *     InputSecurityGroups?: list<string>,
     *     MediaConnectFlows?: list<Shapes\MediaConnectFlowRequest>,
     *     Name?: string,
     *     RoleArn?: string,
     *     Sources?: list<Shapes\InputSourceRequest>,
     *     SrtSettings?: Shapes\SrtSettingsRequest,
     *     MulticastSettings?: Shapes\MulticastSettingsUpdateRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
