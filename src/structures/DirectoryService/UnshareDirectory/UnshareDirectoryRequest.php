<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UnshareDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property Shapes\UnshareTarget $UnshareTarget
 */
class UnshareDirectoryRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     UnshareTarget: Shapes\UnshareTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
