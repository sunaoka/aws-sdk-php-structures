<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteTape;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string $TapeARN
 * @property bool $BypassGovernanceRetention
 */
class DeleteTapeRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     TapeARN: string,
     *     BypassGovernanceRetention?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
