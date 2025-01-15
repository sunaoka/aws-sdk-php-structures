<?php

namespace Sunaoka\Aws\Structures\Sms\StartOnDemandAppReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string|null $description
 */
class StartOnDemandAppReplicationRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
