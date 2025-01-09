<?php

namespace Sunaoka\Aws\Structures\Sms\DeleteReplicationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $replicationJobId
 */
class DeleteReplicationJobRequest extends Request
{
    /**
     * @param array{replicationJobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
