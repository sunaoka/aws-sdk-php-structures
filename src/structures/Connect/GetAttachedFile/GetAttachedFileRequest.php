<?php

namespace Sunaoka\Aws\Structures\Connect\GetAttachedFile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $FileId
 * @property int $UrlExpiryInSeconds
 * @property string $AssociatedResourceArn
 */
class GetAttachedFileRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     FileId: string,
     *     UrlExpiryInSeconds?: int,
     *     AssociatedResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
