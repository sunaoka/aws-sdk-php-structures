<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscriptionTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property string $identifier
 */
class GetSubscriptionTargetRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
