<?php

namespace Sunaoka\Aws\Structures\Evs\UpdateEnvironmentConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $environmentId
 * @property string $connectorId
 * @property string|null $applianceFqdn
 * @property string|null $secretIdentifier
 */
class UpdateEnvironmentConnectorRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     environmentId: string,
     *     connectorId: string,
     *     applianceFqdn?: string|null,
     *     secretIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
