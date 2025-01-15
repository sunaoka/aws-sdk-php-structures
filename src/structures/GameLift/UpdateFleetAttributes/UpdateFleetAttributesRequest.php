<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateFleetAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string|null $Name
 * @property string|null $Description
 * @property 'NoProtection'|'FullProtection'|null $NewGameSessionProtectionPolicy
 * @property Shapes\ResourceCreationLimitPolicy|null $ResourceCreationLimitPolicy
 * @property list<string>|null $MetricGroups
 * @property Shapes\AnywhereConfiguration|null $AnywhereConfiguration
 */
class UpdateFleetAttributesRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     NewGameSessionProtectionPolicy?: 'NoProtection'|'FullProtection'|null,
     *     ResourceCreationLimitPolicy?: Shapes\ResourceCreationLimitPolicy|null,
     *     MetricGroups?: list<string>|null,
     *     AnywhereConfiguration?: Shapes\AnywhereConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
