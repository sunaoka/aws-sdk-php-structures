<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\UpdateEventIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 */
class UpdateEventIntegrationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
