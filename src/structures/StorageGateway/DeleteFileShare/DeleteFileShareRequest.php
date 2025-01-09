<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteFileShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileShareARN
 * @property bool $ForceDelete
 */
class DeleteFileShareRequest extends Request
{
    /**
     * @param array{
     *     FileShareARN: string,
     *     ForceDelete?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
