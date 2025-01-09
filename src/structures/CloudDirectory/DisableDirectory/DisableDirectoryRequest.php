<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\DisableDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 */
class DisableDirectoryRequest extends Request
{
    /**
     * @param array{DirectoryArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
