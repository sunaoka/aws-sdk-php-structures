<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateManagedThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string|null $Owner
 * @property string|null $CredentialLockerId
 * @property string|null $SerialNumber
 * @property string|null $Brand
 * @property string|null $Model
 * @property string|null $Name
 * @property Shapes\CapabilityReport|null $CapabilityReport
 * @property string|null $Capabilities
 * @property string|null $Classification
 * @property 'STANDARD'|'NETWORK_WIDE_EXCLUSION'|null $HubNetworkMode
 * @property array<string, string>|null $MetaData
 */
class UpdateManagedThingRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     Owner?: string|null,
     *     CredentialLockerId?: string|null,
     *     SerialNumber?: string|null,
     *     Brand?: string|null,
     *     Model?: string|null,
     *     Name?: string|null,
     *     CapabilityReport?: Shapes\CapabilityReport|null,
     *     Capabilities?: string|null,
     *     Classification?: string|null,
     *     HubNetworkMode?: 'STANDARD'|'NETWORK_WIDE_EXCLUSION'|null,
     *     MetaData?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
