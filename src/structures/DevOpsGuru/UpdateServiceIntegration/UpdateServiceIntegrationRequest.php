<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateServiceIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\UpdateServiceIntegrationConfig $ServiceIntegration
 */
class UpdateServiceIntegrationRequest extends Request
{
    /**
     * @param array{ServiceIntegration: Shapes\UpdateServiceIntegrationConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
