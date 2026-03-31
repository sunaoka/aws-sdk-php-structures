<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\GetIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $integrationId
 */
class GetIntegrationRequest extends Request
{
    /**
     * @param array{integrationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
