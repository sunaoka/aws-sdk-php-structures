<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeRestoreJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RestoreJobId
 */
class DescribeRestoreJobRequest extends Request
{
    /**
     * @param array{RestoreJobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
