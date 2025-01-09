<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateSubscriptionRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string $requestReason
 */
class UpdateSubscriptionRequestRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     requestReason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
