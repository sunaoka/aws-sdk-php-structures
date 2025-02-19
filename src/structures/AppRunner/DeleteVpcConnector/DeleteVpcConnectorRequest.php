<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteVpcConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcConnectorArn
 */
class DeleteVpcConnectorRequest extends Request
{
    /**
     * @param array{VpcConnectorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
