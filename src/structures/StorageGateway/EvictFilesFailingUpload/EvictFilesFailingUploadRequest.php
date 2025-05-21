<?php

namespace Sunaoka\Aws\Structures\StorageGateway\EvictFilesFailingUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileShareARN
 * @property bool|null $ForceRemove
 */
class EvictFilesFailingUploadRequest extends Request
{
    /**
     * @param array{
     *     FileShareARN: string,
     *     ForceRemove?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
