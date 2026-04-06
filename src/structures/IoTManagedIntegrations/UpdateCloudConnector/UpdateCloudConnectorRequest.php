<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateCloudConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string|null $Name
 * @property string|null $Description
 */
class UpdateCloudConnectorRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     Name?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
