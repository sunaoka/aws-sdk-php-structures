<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\RestoreServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupId
 * @property string $ServerName
 * @property string $InstanceType
 * @property string $KeyPair
 */
class RestoreServerRequest extends Request
{
    /**
     * @param array{
     *     BackupId: string,
     *     ServerName: string,
     *     InstanceType?: string,
     *     KeyPair?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
