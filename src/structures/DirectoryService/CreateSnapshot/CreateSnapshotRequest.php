<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $Name
 */
class CreateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
