<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DisableRadius;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 */
class DisableRadiusRequest extends Request
{
    /**
     * @param array{DirectoryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
