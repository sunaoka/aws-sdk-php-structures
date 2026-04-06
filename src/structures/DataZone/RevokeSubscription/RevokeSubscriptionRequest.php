<?php

namespace Sunaoka\Aws\Structures\DataZone\RevokeSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property bool|null $retainPermissions
 */
class RevokeSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     retainPermissions?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
