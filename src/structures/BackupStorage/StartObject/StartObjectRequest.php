<?php

namespace Sunaoka\Aws\Structures\BackupStorage\StartObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupJobId
 * @property string $ObjectName
 * @property bool|null $ThrowOnDuplicate
 */
class StartObjectRequest extends Request
{
    /**
     * @param array{
     *     BackupJobId: string,
     *     ObjectName: string,
     *     ThrowOnDuplicate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
