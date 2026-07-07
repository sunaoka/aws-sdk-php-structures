<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateCloudConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CloudConnectorId
 * @property string|null $DisplayName
 * @property Shapes\CloudConnectorConfiguration|null $Configuration
 * @property string|null $Description
 */
class UpdateCloudConnectorRequest extends Request
{
    /**
     * @param array{
     *     CloudConnectorId: string,
     *     DisplayName?: string|null,
     *     Configuration?: Shapes\CloudConnectorConfiguration|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
