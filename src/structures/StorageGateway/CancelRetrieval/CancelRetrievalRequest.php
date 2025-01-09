<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CancelRetrieval;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string $TapeARN
 */
class CancelRetrievalRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     TapeARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
