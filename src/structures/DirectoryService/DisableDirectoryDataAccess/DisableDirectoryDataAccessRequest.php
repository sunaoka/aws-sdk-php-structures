<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DisableDirectoryDataAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 */
class DisableDirectoryDataAccessRequest extends Request
{
    /**
     * @param array{DirectoryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
