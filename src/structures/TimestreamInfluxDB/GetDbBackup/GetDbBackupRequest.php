<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetDbBackupRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
