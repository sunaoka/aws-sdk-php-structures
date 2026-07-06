<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutStorageTierPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'STANDARD'|'INTELLIGENT_TIERING' $storageTier
 */
class PutStorageTierPolicyRequest extends Request
{
    /**
     * @param array{storageTier: 'STANDARD'|'INTELLIGENT_TIERING'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
