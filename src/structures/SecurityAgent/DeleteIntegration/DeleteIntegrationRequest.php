<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\DeleteIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $integrationId
 */
class DeleteIntegrationRequest extends Request
{
    /**
     * @param array{integrationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
