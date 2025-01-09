<?php

namespace Sunaoka\Aws\Structures\SSMContacts\StopEngagement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EngagementId
 * @property string $Reason
 */
class StopEngagementRequest extends Request
{
    /**
     * @param array{
     *     EngagementId: string,
     *     Reason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
