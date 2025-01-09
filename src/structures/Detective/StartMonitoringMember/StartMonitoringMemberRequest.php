<?php

namespace Sunaoka\Aws\Structures\Detective\StartMonitoringMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 * @property string $AccountId
 */
class StartMonitoringMemberRequest extends Request
{
    /**
     * @param array{
     *     GraphArn: string,
     *     AccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
