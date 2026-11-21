<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteInboundConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $InboundConnectorId
 */
class DeleteInboundConnectorRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     InboundConnectorId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
