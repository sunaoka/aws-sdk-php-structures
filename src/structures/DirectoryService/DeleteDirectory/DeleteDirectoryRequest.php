<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DeleteDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 */
class DeleteDirectoryRequest extends Request
{
    /**
     * @param array{DirectoryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
