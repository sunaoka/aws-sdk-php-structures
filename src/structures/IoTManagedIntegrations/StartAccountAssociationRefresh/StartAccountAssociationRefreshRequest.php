<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\StartAccountAssociationRefresh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountAssociationId
 */
class StartAccountAssociationRefreshRequest extends Request
{
    /**
     * @param array{AccountAssociationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
