<?php

namespace Sunaoka\Aws\Structures\StorageGateway\NotifyWhenUploaded;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileShareARN
 */
class NotifyWhenUploadedRequest extends Request
{
    /**
     * @param array{FileShareARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
