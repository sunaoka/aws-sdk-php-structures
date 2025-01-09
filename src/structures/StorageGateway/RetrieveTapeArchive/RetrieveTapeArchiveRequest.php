<?php

namespace Sunaoka\Aws\Structures\StorageGateway\RetrieveTapeArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TapeARN
 * @property string $GatewayARN
 */
class RetrieveTapeArchiveRequest extends Request
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
