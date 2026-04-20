<?php

namespace Sunaoka\Aws\Structures\Evs\CreateEntitlement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $environmentId
 * @property string $connectorId
 * @property 'WINDOWS_SERVER' $entitlementType
 * @property list<string> $vmIds
 */
class CreateEntitlementRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     environmentId: string,
     *     connectorId: string,
     *     entitlementType: 'WINDOWS_SERVER',
     *     vmIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
