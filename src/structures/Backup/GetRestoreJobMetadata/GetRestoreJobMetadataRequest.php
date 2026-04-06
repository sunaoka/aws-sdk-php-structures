<?php

namespace Sunaoka\Aws\Structures\Backup\GetRestoreJobMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RestoreJobId
 */
class GetRestoreJobMetadataRequest extends Request
{
    /**
     * @param array{RestoreJobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
