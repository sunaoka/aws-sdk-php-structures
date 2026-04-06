<?php

namespace Sunaoka\Aws\Structures\BackupStorage\DeleteObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupJobId
 * @property string $ObjectName
 */
class DeleteObjectRequest extends Request
{
    /**
     * @param array{
     *     BackupJobId: string,
     *     ObjectName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
