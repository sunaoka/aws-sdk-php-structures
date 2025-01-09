<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\UpdateDataIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $Name
 * @property string $Description
 */
class UpdateDataIntegrationRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     Name?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
