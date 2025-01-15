<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteReplicator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CurrentVersion
 * @property string $ReplicatorArn
 */
class DeleteReplicatorRequest extends Request
{
    /**
     * @param array{
     *     CurrentVersion?: string|null,
     *     ReplicatorArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
