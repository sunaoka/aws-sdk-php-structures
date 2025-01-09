<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteAttachedFile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $FileId
 * @property string $AssociatedResourceArn
 */
class DeleteAttachedFileRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     FileId: string,
     *     AssociatedResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
