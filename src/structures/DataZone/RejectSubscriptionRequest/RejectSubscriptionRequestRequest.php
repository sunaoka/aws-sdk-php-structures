<?php

namespace Sunaoka\Aws\Structures\DataZone\RejectSubscriptionRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $decisionComment
 * @property string $domainIdentifier
 * @property string $identifier
 */
class RejectSubscriptionRequestRequest extends Request
{
    /**
     * @param array{
     *     decisionComment?: string|null,
     *     domainIdentifier: string,
     *     identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
