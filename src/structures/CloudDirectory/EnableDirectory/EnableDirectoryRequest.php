<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\EnableDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 */
class EnableDirectoryRequest extends Request
{
    /**
     * @param array{DirectoryArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
