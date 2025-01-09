<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 */
class GetDirectoryRequest extends Request
{
    /**
     * @param array{DirectoryArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
