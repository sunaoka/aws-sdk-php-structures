<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\DeleteDbBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class DeleteDbBackupRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
