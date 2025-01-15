<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\UpdateEventIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 */
class UpdateEventIntegrationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
