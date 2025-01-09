<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateFleetAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string $Name
 * @property string $Description
 * @property 'NoProtection'|'FullProtection' $NewGameSessionProtectionPolicy
 * @property Shapes\ResourceCreationLimitPolicy $ResourceCreationLimitPolicy
 * @property list<string> $MetricGroups
 * @property Shapes\AnywhereConfiguration $AnywhereConfiguration
 */
class UpdateFleetAttributesRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     Name?: string,
     *     Description?: string,
     *     NewGameSessionProtectionPolicy?: 'NoProtection'|'FullProtection',
     *     ResourceCreationLimitPolicy?: Shapes\ResourceCreationLimitPolicy,
     *     MetricGroups?: list<string>,
     *     AnywhereConfiguration?: Shapes\AnywhereConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
