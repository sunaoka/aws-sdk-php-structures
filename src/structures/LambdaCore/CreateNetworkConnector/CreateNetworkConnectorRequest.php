<?php

namespace Sunaoka\Aws\Structures\LambdaCore\CreateNetworkConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\NetworkConnectorConfiguration $Configuration
 * @property string|null $OperatorRole
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 */
class CreateNetworkConnectorRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Configuration: Shapes\NetworkConnectorConfiguration,
     *     OperatorRole?: string|null,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
