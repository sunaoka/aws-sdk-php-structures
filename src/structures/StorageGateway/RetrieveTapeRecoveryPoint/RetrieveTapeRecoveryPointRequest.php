<?php

namespace Sunaoka\Aws\Structures\StorageGateway\RetrieveTapeRecoveryPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TapeARN
 * @property string $GatewayARN
 */
class RetrieveTapeRecoveryPointRequest extends Request
{
    /**
     * @param array{
     *     TapeARN: string,
     *     GatewayARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
