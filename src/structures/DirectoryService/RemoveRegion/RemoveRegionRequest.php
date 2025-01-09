<?php

namespace Sunaoka\Aws\Structures\DirectoryService\RemoveRegion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 */
class RemoveRegionRequest extends Request
{
    /**
     * @param array{DirectoryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
