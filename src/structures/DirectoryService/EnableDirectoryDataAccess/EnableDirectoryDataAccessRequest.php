<?php

namespace Sunaoka\Aws\Structures\DirectoryService\EnableDirectoryDataAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 */
class EnableDirectoryDataAccessRequest extends Request
{
    /**
     * @param array{DirectoryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
