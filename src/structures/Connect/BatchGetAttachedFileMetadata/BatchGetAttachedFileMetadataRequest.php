<?php

namespace Sunaoka\Aws\Structures\Connect\BatchGetAttachedFileMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $FileIds
 * @property string $InstanceId
 * @property string $AssociatedResourceArn
 */
class BatchGetAttachedFileMetadataRequest extends Request
{
    /**
     * @param array{
     *     FileIds: list<string>,
     *     InstanceId: string,
     *     AssociatedResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
