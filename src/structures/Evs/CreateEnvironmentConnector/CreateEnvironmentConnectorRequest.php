<?php

namespace Sunaoka\Aws\Structures\Evs\CreateEnvironmentConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $environmentId
 * @property 'OPERATIONS_MANAGER'|'SDDC_MANAGER'|'VCENTER' $type
 * @property string $applianceFqdn
 * @property string $secretIdentifier
 */
class CreateEnvironmentConnectorRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     environmentId: string,
     *     type: 'OPERATIONS_MANAGER'|'SDDC_MANAGER'|'VCENTER',
     *     applianceFqdn: string,
     *     secretIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
