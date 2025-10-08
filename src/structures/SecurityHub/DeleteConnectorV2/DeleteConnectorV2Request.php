<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeleteConnectorV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 */
class DeleteConnectorV2Request extends Request
{
    /**
     * @param array{ConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
