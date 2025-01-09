<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\GetEventIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetEventIntegrationRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
