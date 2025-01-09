<?php

namespace Sunaoka\Aws\Structures\MQ\Promote;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BrokerId
 * @property 'SWITCHOVER'|'FAILOVER' $Mode
 */
class PromoteRequest extends Request
{
    /**
     * @param array{
     *     BrokerId: string,
     *     Mode: 'SWITCHOVER'|'FAILOVER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
