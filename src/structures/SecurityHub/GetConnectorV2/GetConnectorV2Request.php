<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConnectorV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 */
class GetConnectorV2Request extends Request
{
    /**
     * @param array{ConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
