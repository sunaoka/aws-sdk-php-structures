<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteDirectoryConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryName
 */
class DeleteDirectoryConfigRequest extends Request
{
    /**
     * @param array{DirectoryName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
