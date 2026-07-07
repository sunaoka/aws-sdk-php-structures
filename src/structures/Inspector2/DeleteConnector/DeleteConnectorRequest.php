<?php

namespace Sunaoka\Aws\Structures\Inspector2\DeleteConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorArn
 */
class DeleteConnectorRequest extends Request
{
    /**
     * @param array{connectorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
