<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\DeleteIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IntegrationIdentifier $identifier
 */
class DeleteIntegrationRequest extends Request
{
    /**
     * @param array{identifier: Shapes\IntegrationIdentifier} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
