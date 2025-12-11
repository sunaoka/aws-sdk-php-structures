<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutLogGroupDeletionProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupIdentifier
 * @property bool $deletionProtectionEnabled
 */
class PutLogGroupDeletionProtectionRequest extends Request
{
    /**
     * @param array{
     *     logGroupIdentifier: string,
     *     deletionProtectionEnabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
