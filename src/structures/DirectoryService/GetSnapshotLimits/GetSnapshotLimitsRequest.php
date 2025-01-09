<?php

namespace Sunaoka\Aws\Structures\DirectoryService\GetSnapshotLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 */
class GetSnapshotLimitsRequest extends Request
{
    /**
     * @param array{DirectoryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
