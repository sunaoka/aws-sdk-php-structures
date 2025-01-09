<?php

namespace Sunaoka\Aws\Structures\Sms\StartOnDemandReplicationRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $replicationJobId
 * @property string $description
 */
class StartOnDemandReplicationRunRequest extends Request
{
    /**
     * @param array{
     *     replicationJobId: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
