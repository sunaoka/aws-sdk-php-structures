<?php

namespace Sunaoka\Aws\Structures\mgn\StartReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property string $sourceServerID
 */
class StartReplicationRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     sourceServerID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
