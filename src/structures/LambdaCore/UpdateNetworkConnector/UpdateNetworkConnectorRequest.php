<?php

namespace Sunaoka\Aws\Structures\LambdaCore\UpdateNetworkConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property Shapes\NetworkConnectorConfiguration|null $Configuration
 * @property string|null $OperatorRole
 * @property string|null $ClientToken
 */
class UpdateNetworkConnectorRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     Configuration?: Shapes\NetworkConnectorConfiguration|null,
     *     OperatorRole?: string|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
