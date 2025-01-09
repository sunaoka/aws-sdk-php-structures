<?php

namespace Sunaoka\Aws\Structures\mgn\PauseReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property string $sourceServerID
 */
class PauseReplicationRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     sourceServerID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
