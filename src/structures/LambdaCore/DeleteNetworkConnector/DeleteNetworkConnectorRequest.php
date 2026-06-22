<?php

namespace Sunaoka\Aws\Structures\LambdaCore\DeleteNetworkConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteNetworkConnectorRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
