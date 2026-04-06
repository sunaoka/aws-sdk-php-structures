<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IntegrationIdentifier
 */
class DeleteIntegrationRequest extends Request
{
    /**
     * @param array{IntegrationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
