<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStorageProfileForQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $storageProfileId
 */
class GetStorageProfileForQueueRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     storageProfileId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
