<?php

namespace Sunaoka\Aws\Structures\DirectoryService\RejectSharedDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SharedDirectoryId
 */
class RejectSharedDirectoryRequest extends Request
{
    /**
     * @param array{SharedDirectoryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
