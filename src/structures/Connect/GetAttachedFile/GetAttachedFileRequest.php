<?php

namespace Sunaoka\Aws\Structures\Connect\GetAttachedFile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $FileId
 * @property int<5, 300> $UrlExpiryInSeconds
 * @property string $AssociatedResourceArn
 */
class GetAttachedFileRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     FileId: string,
     *     UrlExpiryInSeconds?: int<5, 300>,
     *     AssociatedResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
