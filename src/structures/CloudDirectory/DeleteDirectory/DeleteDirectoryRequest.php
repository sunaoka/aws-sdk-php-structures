<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\DeleteDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 */
class DeleteDirectoryRequest extends Request
{
    /**
     * @param array{DirectoryArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
