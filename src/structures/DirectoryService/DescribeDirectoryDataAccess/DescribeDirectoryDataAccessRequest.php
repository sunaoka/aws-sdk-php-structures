<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectoryDataAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 */
class DescribeDirectoryDataAccessRequest extends Request
{
    /**
     * @param array{DirectoryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
