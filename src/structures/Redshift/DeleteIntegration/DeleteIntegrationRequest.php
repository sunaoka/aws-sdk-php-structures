<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IntegrationArn
 */
class DeleteIntegrationRequest extends Request
{
    /**
     * @param array{IntegrationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
