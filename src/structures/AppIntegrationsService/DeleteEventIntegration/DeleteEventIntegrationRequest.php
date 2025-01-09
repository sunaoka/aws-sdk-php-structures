<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\DeleteEventIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteEventIntegrationRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
