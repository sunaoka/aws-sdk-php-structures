<?php

namespace Sunaoka\Aws\Structures\DataZone\RejectSubscriptionRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $decisionComment
 */
class RejectSubscriptionRequestRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     decisionComment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
