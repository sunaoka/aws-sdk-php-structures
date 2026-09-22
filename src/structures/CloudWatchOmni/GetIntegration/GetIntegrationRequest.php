<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IntegrationIdentifier $identifier
 */
class GetIntegrationRequest extends Request
{
    /**
     * @param array{identifier: Shapes\IntegrationIdentifier} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
