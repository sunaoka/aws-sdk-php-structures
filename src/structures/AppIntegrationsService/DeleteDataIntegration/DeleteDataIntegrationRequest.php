<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\DeleteDataIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataIntegrationIdentifier
 */
class DeleteDataIntegrationRequest extends Request
{
    /**
     * @param array{DataIntegrationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
