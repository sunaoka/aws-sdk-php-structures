<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutStorageTierPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'STANDARD'|'INTELLIGENT_TIERING'|null $storageTier
 * @property int<0, max>|null $lastUpdatedTime
 */
class PutStorageTierPolicyResponse extends Response
{
}
