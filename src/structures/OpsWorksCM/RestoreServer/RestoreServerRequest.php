<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\RestoreServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupId
 * @property string $ServerName
 * @property string|null $InstanceType
 * @property string|null $KeyPair
 */
class RestoreServerRequest extends Request
{
    /**
     * @param array{
     *     BackupId: string,
     *     ServerName: string,
     *     InstanceType?: string|null,
     *     KeyPair?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
