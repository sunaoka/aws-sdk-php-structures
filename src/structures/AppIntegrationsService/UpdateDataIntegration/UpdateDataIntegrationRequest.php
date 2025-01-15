<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\UpdateDataIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string|null $Name
 * @property string|null $Description
 */
class UpdateDataIntegrationRequest extends Request
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
