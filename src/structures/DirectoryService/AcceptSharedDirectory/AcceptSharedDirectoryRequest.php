<?php

namespace Sunaoka\Aws\Structures\DirectoryService\AcceptSharedDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SharedDirectoryId
 */
class AcceptSharedDirectoryRequest extends Request
{
    /**
     * @param array{SharedDirectoryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
